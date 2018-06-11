<?php
namespace App\Http\Controllers\User;

use App\User;
use App\Images;
use App\Mail\UserCreated;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;
use App\Transformers\Transformers\UserTransformer;

class UserController extends ApiController
{
    /*
    *
    * Si solo necesitamos proteger la totalidad de los metodos con el middleware auth:api, solo basta con declarar en el __construct
    * public function __construct() { parent::__construct } // con ello estas heredando lo que tiene el constructor padre, en este caso el de ApiController

    * Si queremos dejar habilitadas ciertos metodos para publico general, precisa usar el middleware client_credentials, en donde incluiremos los metodos correspondientes
    * public function __construct() { $this->middleware('client_credentials')->only(['metodos de acceso publico, separados por coma ","']); }

    * Ahora bien, si el mismo controlador posee rutas que debemos proteger y que no deben tener acceso "publico", precisa usar para aquellos metodos el middleware auth:api
    * en donde debemos incluir o excluir (según sea el caso) los metodos a proteger
    * public function __construct() { $this->middleware('client_credentials')->except(['metodos de acceso privado, separados por coma ","']); }
    *
    */

    public function __construct()
    {
        $this->middleware('client.credentials')->only(['store', 'resend']);
        $this->middleware('auth:api')->except(['store', 'verify', 'resend']);
        //$this->middleware('scope:manege-account')->only(['show', 'update']);
        $this->middleware('transform.input:' . UserTransformer::class)->only(['store', 'update']);
    }

    public function index()
    {
        $users = User::all();
        return $this->showAll($users);
    }

    public function store(UserRequest $request)
    {
        $fields                      = $request->all();
        $fields['name']              = ucwords($request->name);
        $fields['lastname']          = ucwords($request->lastname);
        $fields['nickname']          = $request->nickname;
        $fields['email']             = $request->email;
        $fields['phone']             = $request->phone;
        $fields['password']          = bcrypt($request->password);
        $fields['status']            = User::USERNOTVERIFIED;
        $fields['type']              = $request->type;


        if ($request->type == User::CLUBER ) {
          $fields['code_verification'] = User::setCodeVerification();
        } else {
          $fields['code_verification'] = User::setSMSVerification();
        }


        $today = Carbon::now()->toDateTimeString();
        $change_date = str_replace(" ", "-", $today);
        $name = $change_date."-profile-".$request->nickname; 
    
        if (empty($request->avatar)) {
            //set default image 
            $fields['avatar'] = "profiles/profile.png"; 
        } else {
            $fields['avatar']  = $request->avatar->storeAs('profiles', $name);
        }
        
        $user = User::create($fields);
                        
        return $this->showOne($user, 201);
    }

    public function show(User $user)
    {
        return $this->showOne($user);
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'email'    => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed',
        ];

        $this->validate($request, $rules);

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('lastname')) {
            $user->lastname = $request->lastname;
        }

        if ($request->has('email') && $user->email != $request->email) {
            $user->status = User::USERNOTVERIFIED;
            $user->code_verification = User::setCodeVerification();
            $user->email = $request->email;
        }

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        if (!$user->isDirty()) { //verifica si el usuario no se modificó
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar.', 422);
        }

        $user->save();
        return $this->showOne($user);
    }

    public function destroy(User $user) //User seria una inyeccion de dependencias, con esto nos ahorramos codear: $user = findOrFail($id);
    {
        $user->delete();
        return $this->showOne($user);
    }

    public function verify($token)
    {
        $user = User::where('code_verification', $token)->firstOrFail(); //buscamos el usuario con ese token
        $user->status = User::USERVERIFIED;
        $user->code_verification = User::USERVERIFIED;

        $user->save();
        return $this->showMessage('Su verificación a sido exitosa, bienvenido al mundo JOUER CLUB! :)');

    }

    public function resend(User $user)
    {
        if ($user->isVerified()) {
            return $this->errorResponse('Este usuario ya ha sido verificado', 409);
        }
        retry(5, function() use ($user){
            Mail::to($user)->send(new UserCreated($user));
        }, 100);

        return $this->showMessage('Correo reenviado exitosamente, revise su bandeja de correo electrónico.');
    }

    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            // Authentication ok...
            $user = auth()->user();
            if ($user->status == "pending") {
                return $this->errorResponse("Antes de comenzar debes validar tu cuenta", 401);
            }
            $user->api_token = str_random(60);
            $user->save();
            return $this->showOne($user, 200);
        }
        return $this->errorResponse("Usuario no autentificado", 401);
        //echo "Email: ".$request->email." Password: ".$request->password;
    }

    public function logout(Request $request)
    {
        if (auth()->user()) {
            $user = auth()->user();
            $user->api_token = null; // clear api token
            $user->save();
            return $this->successResponse("Gracias por ser parte de JouerCLub, hasta la proxima.", 200);
        }
        return $this->errorResponse("No es posible realizar esta peticion.", 401);
    }

}

<?php
namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
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
        $fields['nickname']          = ucwords($request->nickname);
        $fields['email']             = ucwords($request->email);
        $fields['password']          = bcrypt($request->password);
        $fields['picture_profile']   = $request->picture_profile->store('profile'); //STORE: primer parametro -> ubicacion / 2do -> sistema de archivos
        $fields['status']            = User::USERNOTVERIFIED;
        $fields['type']              = $request->type;

        $fields['code_verification'] = User::setCodeVerification();

        //dd($fields); die();

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
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $user->save();
        return $this->showOne($user);
    }

    public function destroy(User $user) //User seria una inyeccion de dependencias, con esto nos ahorramos codear: $user = findOrFail($id);
    {
        $user->delete();
        return $this->showOne($user);
    }
}

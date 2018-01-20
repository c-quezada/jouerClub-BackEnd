<?php
namespace App\Http\Controllers\User;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    public function index()
    {    
        $users = User::all();
        return $this->showAll($users);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ];

        $this->validate($request, $rules);

        $fields                      = $request->all();
        $fields['name']              = ucwords($request->name);
        $fields['lastname']          = ucwords($request->name);
        $fields['password']          = bcrypt($request->password);
        $fields['status']            = User::USERNOTVERIFIED;
        $fields['code_verification'] = User::setCodeVerification();

        $user = User::create($fields);
        return $this->showOne($user, 201);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return $this->showOne($user);        
    }

    public function update(Request $request, User $user)
    {
        $rules = [
            'email' => 'email|unique:users,email,' . $user->id,
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

    public function destroy(User $id)
    {
        $user->delete();
        return $this->showOne($id);
    }
}

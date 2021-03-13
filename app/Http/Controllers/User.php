<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function login(Request $request) {
        $users = ModelsUser::where('email', '=', $request->email)->where('password', '=', hash('sha512', $request->password))->get();
        if($users) {
            if(count($users) > 0) {
                return json_encode(array('error' => 0, 'user' => $users[0]));
            }
        }
        return json_encode(array('error' => 1, 'message' => 'Correo o contraseña inválidos'));
    }

    public function register(UserRequest $request) {
        $users = ModelsUser::where('email', '=', $request->email)->get();
        if($users && count($users) > 0) {
            return json_encode(array('error' => 1, 'message' => 'Este correo ya existe'));
        }

        $user = new ModelsUser();
        $user->email = $request->email;
        $user->password = hash('sha512', $request->password);

        $user->save();
        return json_encode(array('error' => 0, 'user' => $user));
    }
}

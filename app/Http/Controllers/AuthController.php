<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function SignUp(AuthRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('index')->with('modal-info', 'Вы успешно зарегестрированы! Вам доступен личный кабинет');
    }
}

<?php

namespace App\Http\Controllers;


use Auth;
use App\Http\Requests\SignInRequest;
use App\Http\Requests\SignUpRequest;
use App\Http\Requests\PassResetRequest;

use App\Mail\SendMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function SignUp(SignUpRequest $request)
    {
        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'tel' => $request->input('tel'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('index')->with('modal-info', 'Вы успешно зарегестрированы!');
    }

    public function SignIn(SignInRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('modal-info', 'Не правильный Email или пароль.');
        }
        return redirect()->route('index')->with('modal-info', 'Добро пожаловать, ' . Auth::user()->getUser()->name . '!');
    }

    public function SignOut()
    {
        Auth::logOut();
        return redirect()->route('auth');
    }

    public function PassReset(PassResetRequest $request)
    {
        $user = User::whereEmail ($request->email)->first();
        if ($user == null) return redirect()->back()->with('modal-info', 'Не верный Email. Такого пользователя не существует!');
        // $user = Sentinel::findById ($user->id);
        dd ($user->id);
        // Mail::to($request->email)->send(new SendMail());
        return redirect()->back()->with('modal-info', 'На ваш email выслана ссылка для изменения пароля');
    }
}

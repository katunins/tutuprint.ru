<link rel="stylesheet" href="css/auth.css">
@extends('template')

@section('title', 'Регистрация пользователя')

@section('content')

<div class="auth-form">
    <form action="{{Route('SignUp')}}" role="form" method="post">
        @csrf

        <div class="form-group">
            <input class="@error('name') error-input @enderror" type="text" id="name" name="name"
                value="{{Request::old('name') ?: ''}}"
                placeholder="{{$errors->has('name') ?  $errors->first('name'): (Request::old('name') ?: 'Ваше имя')}}">
        </div>

        <div class="form-group">
            <input class="@error('email') error-input @enderror" type="email" id="email" name="email"
                value="{{Request::old('email') ?: ''}}"
                placeholder="{{$errors->has('email') ?  $errors->first('email'): (Request::old('email') ?: 'Email')}}">
        </div>

        <div class="form-group">
            <input class="@error('password') error-input @enderror" type="password" id="password" name="password"
                placeholder="{{ $errors->has('password') ?  $errors->first('password'): 'Введите пароль' }}">
        </div>

<div class="agree">
    Нажимая кнопку <b>зарегистрироваться</b> я даю <a href="{{Route('agree')}}">согласие</a> на обработку
    персональных
    данных
</div>
<button class="button" type="submit">Зарегистрироваться</button>
</form>
</div>

@endsection

@section('back') <a href={{Route('auth')}}> < </a> @endsection
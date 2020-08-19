<link rel="stylesheet" href="css/auth.css">
@extends('template')

@section('title', 'Регистрация пользователя')

@section('content')
<div class="auth-form">
    <form action="{{Route('SignIn')}}" role="form" method="post">
        @csrf
        <div class="form-group">
            <input type="text" id="name" name="name">
            <label for="name">Имя</label>
        </div>
        <div class="form-group">

            <input type="email" id="login" name="login">
            <label for="login">Email</label>
        </div>
        <div class="form-group">

            <input type="password" id="password" name="password">
            <label for="password">Пароль</label>
        </div>
        <div class="agree">
            Нажимая кнопку <b>зарегистрироваться</b> я даю <a href="{{Route('agree')}}">согласие</a> на обработку персональных
            данных
        </div>
        <button class="button" type="submit">Зарегистрироваться</button>
    </form>
</div>

@endsection

@section('back')
<a href={{Route('auth')}}><</a> 
@endsection

<script src="js/auth.js"></script>
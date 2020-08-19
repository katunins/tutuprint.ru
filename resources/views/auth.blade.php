<link rel="stylesheet" href="css/auth.css">
@extends('template')

@section('title', 'Авторизация пользователя')

@section('content')
<div class="auth-form">
    <form action="{{Route('SignIn')}}" role="form" method="post">
        @csrf
        <div class="form-group">

            <input type="email" id="login" name="login">
            <label for="login">Email</label>
        </div>

        <div class="form-group">

            <input type="password" id="password" name="password">
            <label for="password">Пароль</label>
        </div>
        <a href="">Восстановить пароль</a>
        <button class="button" type="submit">Войти</button>
    </form>
    <div style="text-align: center">
        <button onclick="location.href = '{{Route('registration')}}'" class="button">Зарегистрироваться</button>
    </div>

</div>

@endsection

@section('back')
<a href={{Route('index')}}><</a> 
@endsection 

<script src="js/auth.js"></script>
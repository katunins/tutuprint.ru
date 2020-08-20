@extends('template')
@section('title', 'Сброс пароля')
<link rel="stylesheet" href="css/signin.css">
@section('content')

<div class="auth-form">
    <form action="{{Route('PassReset')}}" role="form" method="post">
        @csrf
        <p>Укажите email от аккаунта, в котором необходимо изменить пароль</p>
        <div class="form-group">
            <input class="@error('email') error-input @enderror" type="email" id="email" name="email"
                value="{{Request::old('email') && !$errors->has('email') ? Request::old('email') : ''}}"
                placeholder="{{$errors->has('email') ?  $errors->first('email'): (Request::old('email') ?: 'Email')}}">
        </div>

        <button class="button" type="submit">Отправить</button>
    </form>

</div>

@endsection

@section('back')
<a href={{Route('auth')}}>
    <</a> @endsection
<link rel="stylesheet" href="css/auth.css">
@extends('template')

@section('title', 'Регистрация пользователя')

@section('content')

<div class="auth-form">
    <form action="{{Route('SignUp')}}" role="form" method="post">
        @csrf

        <div class="form-group">
            <input class="@error('name') error-input @enderror" type="text" id="name" name="name"
                value="{{Request::old('name') ? Request::old('name') : ''}}"
                placeholder="{{$errors->has('name') && !$errors->has('name') ?  $errors->first('name'): (Request::old('name') ?: 'Ваше имя')}}">
        </div>

        <div class="form-group">
            <input class="@error('email') error-input @enderror" type="email" id="email" name="email"
                value="{{Request::old('email') && !$errors->has('email') ? Request::old('email') : ''}}"
                placeholder="{{$errors->has('email') ?  $errors->first('email'): (Request::old('email') ?: 'Email')}}">
        </div>

        {{-- <div class="form-group">
            <input class="@error('tel') error-input @enderror" type="phone" id="tel" name="tel"
                value="{{Request::old('tel') && !$errors->has('tel') ? Request::old('tel') : ''}}"
                placeholder="{{$errors->has('tel') ?  $errors->first('tel'): (Request::old('tel') ?: 'Телефон')}}"
                data-mask="+7 (000) 000-00-00"
        pattern="\\+7 ([0-9]{3}\) [0-9]{3}[\-][0-9]{2}[\-][0-9]{2}"
        type="phone" required title="(000) 000-00-00">
        </div> --}}

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



<script src="js/mobile-mask.js"></script>
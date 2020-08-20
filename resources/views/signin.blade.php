@section('title', 'Авторизация пользователя')
<link rel="stylesheet" href="css/signin.css">
@section('content')

<div class="auth-form">
    <form action="{{Route('SignIn')}}" role="form" method="post">
        @csrf

        <div class="form-group">
            <input class="@error('email') error-input @enderror" type="email" id="email" name="email"
                value="{{Request::old('email') && !$errors->has('email') ? Request::old('email') : ''}}"
                placeholder="{{$errors->has('email') ?  $errors->first('email'): (Request::old('email') ?: 'Email')}}">
        </div>

        <div class="form-group">
            <input class="@error('password') error-input @enderror" type="password" id="password" name="password"
                placeholder="{{ $errors->has('password') ?  $errors->first('password'): 'Введите пароль' }}">
        </div>

        <div class="checkbox">
            <input type="checkbox" name="remember" id="remember" value="">
            <label for="remebmer">Запомнить меня</label>
        </div>

        <button class="button" type="submit">Войти</button>
    </form>
    <div style="text-align: center">
        <button onclick="location.href = '{{Route('registration')}}'" class="button">Зарегистрироваться</button>
    </div>
    <div class="restore-pass">
    <a href="{{ Route ('newpassword') }}">Восстановить пароль</a>
    </div>

</div>

@endsection

@section('back')
<a href={{Route('index')}}>
    <</a> @endsection
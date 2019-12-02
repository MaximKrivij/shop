@extends('main')
<link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
<title>Вход</title>

@section('header')
    @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }} " id="home">Личный Кабинет</a>
        @else
            <a href="{{ route('login') }}" id="login">Вход</a>

        @endauth
    @endif
@endsection

@section('content')
    <form class="form-login" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <input id="email" type="email"  name="email"  placeholder="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        <input id="password" type="password" name="password" placeholder="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
        @endif

        <button type="submit" id="btn">
            Войти
        </button>

        <a href="{{ route('register') }}" id="register">Регистрация</a>
        <a id="Forgotlink" href="{{ route('password.request') }}">
            Забыли Пароль?
        </a>
    </form>

@endsection

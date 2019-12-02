@extends('main')
<link href="{{ asset('css/auth/register.css') }}" rel="stylesheet">
<title>Регистрация</title>

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
    <form class="form-register" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <input id="name" type="text" placeholder="name" name="name" value="{{ old('name') }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif

        <input id="email" type="email" name="email"  placeholder="email" value="{{ old('email') }}" required>
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
        <input id="password-confirm" type="password" placeholder="confirm password" name="password_confirmation" required>
        <button type="submit" id="btn">
            Зарегистрироваться
        </button>
    </form>

@endsection

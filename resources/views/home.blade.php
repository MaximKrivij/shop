@extends('main')

@section('header')

    <a href="{{ url('/home') }}" id="login">
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <a href="{{ route('logout') }}" id="logout"
       onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">
        Выйти
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <a href="{{ route('logout') }}" id="logout">Корзина</a>
@endsection
@extends('main')

@section('header')
     @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}" id="login">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a><br>
        @else
            <a href="{{ route('login') }}" id="login">Вход</a>
        @endauth
    @endif
     <form>
         <p><input type="search" id="search" name="q" placeholder="Поиск по сайту">
             <input type="submit" id="btnSearch" value="Найти"></p>
     </form>
@endsection

@section('content')
    <h1>Content</h1>
@endsection
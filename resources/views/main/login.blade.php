@extends('Main')

@section('title')
Journaling - logowanie
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('CSS/login_register.css'); }} ">
@endsection

@section('content')
<div class="container">

    <form class="" action="/login" method="post">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <label for="name">Nazwa użytkownika</label>
        <input id="name" type="text" placeholder="Nazwa użytkownika" name="name">

        <label for="password">Hasło</label>
        <input id="password" type="password" name="password" placeholder="Hasło">

        <div id="remember_me">
            <label for="remember">Zapamiętaj mnie</label>
            <input id="remember" type="checkbox" name="remember" value="1">
        </div>

        <button class="btn btn-success" type="submit" name="button">Zaloguj</button>
        <p style="text-align: center;">Nie masz konta? <a href="/register">Zarejestruj się</a></p>
    </form>

</div>
@endsection

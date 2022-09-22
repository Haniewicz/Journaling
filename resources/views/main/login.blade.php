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
        <label for="name">Nazwa użytkownika</label>
        <input id="name" type="text" placeholder="Nazwa użytkownika" name="name">
        <label for="password">Hasło</label>
        <input id="password" type="text" name="password" placeholder="Hasło">
        <button class="btn btn-success" type="submit" name="button">Zaloguj</button>
        <p style="text-align: center;">Nie masz konta? <a href="/register">Zarejestruj się</a></p>
    </form>

</div>
@endsection

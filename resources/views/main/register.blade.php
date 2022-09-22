@extends('Main')

@section('title')
Journaling - rejestracja
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('CSS/contact.css'); }} ">
@endsection

@section('content')
<div class="container">

    <form class="" action="/register" method="post">
        <label for="name">Nazwa użytkownika</label>
        <input id="name" type="text" placeholder="Nazwa użytkownika" name="name">
        <label for="email">Adres e-mail</label>
        <input id="email" type="text" placeholder="Adres e-mail" name="email">
        <label for="password">Hasło</label>
        <input id="password" type="text" name="password" placeholder="Hasło">
        <label for="password_confirmation">Powtórz hasło</label>
        <input id="password_confirmation" type="text" name="password_confirmation" placeholder="Powtórz hasło">
        <button class="btn btn-success" type="submit" name="button">Wyślij</button>
    </form>

</div>
@endsection

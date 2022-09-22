@extends('Main')

@section('title')
Journaling - kontakt
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('CSS/contact.css'); }} ">
@endsection

@section('content')
<div class="container">

    <form class="" action="/contact_send" method="post">
        <label for="name">Imię i nazwisko</label>
        <input id="name" type="text" placeholder="Imię i nazwisko" name="name">
        <label for="email">Adres e-mail</label>
        <input id="email" type="text" placeholder="Adres e-mail" name="email">
        <label for="message">Treść wiadomości</label>
        <textarea id="message" name="message" placeholder="Treść wiadomości" rows="8" cols="80"></textarea>
        <button class="btn btn-success" type="submit" name="button">Wyślij</button>
    </form>

</div>
@endsection

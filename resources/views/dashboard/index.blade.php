@extends('Dashboard')

@section('title')
    Panel użytkownika
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('fonts/PlayFair.ttf'); }} ">
@endsection

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="site-category">
            <h3>Dziennik wdzięczności</h3>
            <p>Liczba wpisów: 0</p>
            <a href="/dashboard/show_entries/1" class="btn btn-info">Pokaż wpisy</a>
            <a href="/dashboard/add_entry/1" class="btn btn-success">Dodaj wpis</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="site-category">
            <h3>Dziennik przemyśleń</h3>
            <p>Liczba wpisów: 0</p>
            <a href="/dashboard/show_entries/2" class="btn btn-info">Pokaż wpisy</a>
            <a href="/dashboard/add_entry/2" class="btn btn-success">Dodaj wpis</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="site-category yours">
            <h3>Własna kategoria</h3>
            <p>Twoje kategorie: 0/3</p>
            <a href="/dashboard/add_category" class="btn btn-success">Dodaj</a>
        </div>
    </div>
</div>
<div class="divider">
    <hr>
    <h2>Twoje kategorie</h2>
    <hr>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="user-category">
            <h3>Jakiś</h3>
            <p>Liczba wpisów: 0</p>
            <a href="/dashboard/show_entries/gratitude" class="btn btn-info">Pokaż wpisy</a>
            <a href="/dashboard/add_entry/gratitude" class="btn btn-success">Dodaj wpis</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="user-category">
            <h3>tam</h3>
            <p>Liczba wpisów: 0</p>
            <a href="/dashboard/show_entries/thoughts" class="btn btn-info">Pokaż wpisy</a>
            <a href="/dashboard/add_entry/thoughts" class="btn btn-success">Dodaj wpis</a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="user-category">
            <h3>dziennik</h3>
            <p>Twoje kategorie: 0/3</p>
            <a href="/dashboard/add_category" class="btn btn-success">Dodaj</a>
        </div>
    </div>
</div>
@endsection

@extends('Dashboard')

@section('title')
    Lista wpisów
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('fonts/PlayFair.ttf'); }} ">
<link rel="stylesheet" href="{{ URL::asset('CSS/entry_form.css'); }} ">

@endsection

@section('content')

    @foreach ($data as $value)
        {{$value}}
        <br>
        <br>
    @endforeach
@endsection

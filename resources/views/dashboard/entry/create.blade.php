@extends('Dashboard')

@section('title')
    Dodaj wpis
@endsection

@section('head')
<link rel="stylesheet" href="{{ URL::asset('fonts/PlayFair.ttf'); }} ">
<link rel="stylesheet" href="{{ URL::asset('CSS/entry_form.css'); }} ">

@endsection

@section('content')
    <form class="" action="/dashboard/add_entry" method="post">
        @csrf
        <input type="hidden" name="category" value="{{$data->id}}">
        <label for="category_name">Kategoria: </label>
        <input type="text" disabled name="category_name" value="{{$data->category}}">
        <div class="right">
            <label for="date">Data: </label>
            <input type="text" disabled name="date" value="{{ date('d-m-Y H:i:s') }}">
        </div>
        <br>
        <label for="content">Treść wpisu: </label>
        <br>
        <textarea name="content" rows="8" cols="80"></textarea>
        <br>
        <button type="submit" name="button" class="btn btn-success">Dodaj</button>
    </form>

@endsection

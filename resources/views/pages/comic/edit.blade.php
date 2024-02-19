@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Edit Comic:
        {{$comic->id}}
    </h1>
    <form action="{{route('comic.update', $comic->id)}}" method="post">
        @csrf 
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Title..." value="{{$comic->title}}">
        <br>
        <label for="years">Years:</label>
        <input type="number" name="years" id="years" placeholder="Years..." value="{{$comic->years}}">
        <br>
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" placeholder="Author..." value="{{$comic->author}}">
        <br>
        <label for="illustrator">Illustrator:</label>
        <input type="text" name="illustrator" id="illustrator" placeholder="Illustrator..." value="{{$comic->illustrator}}">

        <label for="publisher">Publisher:</label>
        <input type="text" name="publisher" id="publisher" placeholder="Publisher..." value="{{$comic->publisher}}">

        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" placeholder="Genre..." value="{{$comic->genre}}">

        <label for="edition_number">Edition Number:</label>
        <input type="text" name="edition_number" id="edition_number" placeholder="Edition Number..." value="{{$comic->edition_number}}">

        <label for="value">Value:</label>
        <input type="number" name="value" id="value" placeholder="Value..." value="{{$comic->value}}">

        <input type="submit" value="UPDATE">
        

    </form>
@endsection
@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comic:</h1>
    <form action="{{route('comic.store')}}" method="post">
        @csrf 
        @method('POST')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="Title...">
        <label for="years">Years:</label>
        <input type="number" name="years" id="years" placeholder="Years...">

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" placeholder="Author...">

        <label for="illustrator">Illustrator:</label>
        <input type="text" name="illustrator" id="illustrator" placeholder="Illustrator...">

        <label for="publisher">Publisher:</label>
        <input type="text" name="publisher" id="publisher" placeholder="Publisher...">

        <label for="genre">Genre:</label>
        <input type="text" name="genre" id="genre" placeholder="Genre...">

        <label for="edition_number">Edition Number:</label>
        <input type="text" name="edition_number" id="edition_number" placeholder="Edition Number...">

        <label for="value">Value:</label>
        <input type="number" name="value" id="value" placeholder="Value...">

        <input type="submit" value="CREATE">
        

    </form>
@endsection
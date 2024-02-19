@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <ul>
        @foreach ($comics as $comic)
        <li>
            {{$comic -> title}}
        </li>
        @endforeach
    </ul>
@endsection

<style lang=scss>
    ul {
        list-style:none;
        color:brown;
    }
</style>
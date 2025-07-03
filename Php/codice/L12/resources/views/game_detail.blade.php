@extends('app')


@section('contenuto')

<article>

    <h1>Game: {{ $game->name }}</h1>
    
    <h2>Original platform {{ $game->original_platform }}</h2>
    <h2>Genre {{ $game->genre }}</h2>
    <h2>Year {{ $game->year }}</h2>
    <h2>Publisher {{ $game->publisher->name }}</h2>
    
</article>
@endsection
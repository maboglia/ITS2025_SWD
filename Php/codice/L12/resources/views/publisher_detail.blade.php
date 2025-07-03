@extends('app')


@section('contenuto')

<h1>{{ $publisher->name }}</h1>


@foreach ($publisher->games as $game)
    <article>
        <header>
            <h2>Game: {{ $game->game }}</h2>
        </header>
        
        <h4>Original platform {{ $game->original_platform }}</h4>
        <h4>Genre {{ $game->genre }}</h4>
        <h4>Year {{ $game->year }}</h4>
        
        <footer>
            <h4>Publisher {{ $game->publisher->name }}</h4>
        </footer>

    </article>
@endforeach

@endsection
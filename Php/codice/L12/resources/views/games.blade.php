@extends('app')


@section('contenuto')

    <h1>Games</h1>


    <ul>
        @foreach ($games as $game)
            <li>
                <a href="{{ route('games.show', ['game'=>$game]) }}">{{ $game->game }}</a>                
            </li>
        
        @endforeach
    </ul>


@endsection
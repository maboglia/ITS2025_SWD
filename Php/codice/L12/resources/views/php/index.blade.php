@extends('app')

@section('contenuto')

    <h1>Argomenti PHP</h1>

    <ul>

        @foreach ($argomenti as $arg)
        
        <li><a target="_blank" href="https://www.google.com/search?q=PHP+{{ $arg->argomento }}">{{ $arg->argomento }}</a></li>
        
        @endforeach
        
    </ul>
@endsection
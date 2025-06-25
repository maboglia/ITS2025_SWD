@extends('app')


@section('contenuto')

    <h1>Publishers</h1>


    <ul>
        @foreach ($publishers as $publisher)
            <li>
                <a href="{{route('publishers.show', ['publisher'=> $publisher])}}">{{ $publisher->name }}</a>                
            </li>
        
        @endforeach
    </ul>


@endsection
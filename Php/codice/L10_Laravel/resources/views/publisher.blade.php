@extends('app');

@section('content')

<article>
    <h1>{{$publisher->nome}}</h1>
    <h2><a href="mailto:{{$publisher->contatto}}">Scrivi a {{$publisher->nome}}</a></h2>
</article>

@endsection
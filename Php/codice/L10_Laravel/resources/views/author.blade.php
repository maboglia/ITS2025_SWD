@extends('app');

@section('content')

<article>
    <h1>{{$author->nome}} {{$author->cognome}}</h1>
    <h2>Nazionalità: {{$author->nazionalita}}</h2>
</article>

@endsection
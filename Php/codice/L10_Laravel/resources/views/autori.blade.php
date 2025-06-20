@extends('app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Nazionalità</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($autori as $autore)
            <tr>
                <td>{{ $autore->nome }}</td>
                <td>{{ $autore->cognome }}</td>
                <td>{{ $autore->nazionalita }}</td>
            </tr>
        @endforeach
    </tbody>


</table>






@endsection
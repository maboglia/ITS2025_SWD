@extends('app')

@section('content')

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Contatto</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($editori as $editore)
            <tr>
                <td>{{ $editore->nome }}</td>
                <td>{{ $editore->contatto }}</td>
            </tr>
        @endforeach
    </tbody>


</table>






@endsection
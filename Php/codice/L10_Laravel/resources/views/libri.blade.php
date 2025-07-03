@extends('app')


 @section('content')
 
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Pagine</th>
                    <th>Prezzo</th>
                    <th>Editore</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libri as $libro)
                <tr>
                    <td>{{ $libro->titolo }}</td>
                    <td>{{ $libro->pagine }}</td>
                    <td>{{ $libro->prezzo }}</td>
                    <td>{{ $libro->editore_id }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

@endsection

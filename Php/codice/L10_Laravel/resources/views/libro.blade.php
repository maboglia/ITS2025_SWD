@extends('app')


 @section('content')
 

                <article>
                    <h2>{{ $libro->titolo }}</h2>
                    <h4>{{ $libro->pagine }}</h4>
                    <h4>{{ $libro->prezzo }}</h4>
                    <h4>{{ $libro->editore_id }}</h4>
                </article>


@endsection

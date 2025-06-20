@extends('app')


@section('contenuto')
        <h1>Carrello</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Prezzo</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($articoli as $prodotto)
                    <tr>
                        <td>{{ $prodotto->nome }}</td>
                        <td>{{ $prodotto->categoria }}</td>
                        <td>{{ $prodotto->prezzo }}</td>
                        <td>
                            <form action="{{ route('carts.remove') }}" method="post">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $prodotto->id }}">

                                <button class="btn btn-danger">Remove</button>
                            </form>
                        
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                    <th>Totale</th>
                    <th></th>
                    <th>{{ $totale }}</th>
                    <th><button>Check Out</button></th>
                </tr>                
            </tfoot>

        </table>
@endsection
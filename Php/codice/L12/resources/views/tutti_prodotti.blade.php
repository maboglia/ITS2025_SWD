@extends('app')


@section('contenuto')
    <h1>Prodotti</h1>
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
            @foreach($tuttiProdotti as $prodotto)
                <tr>
                    <td>{{ $prodotto->nome }}</td>
                    <td>{{ $prodotto->categoria }}</td>
                    <td>{{ $prodotto->prezzo }}</td>
                    <td>
                        <form action="{{ route('carts.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $prodotto->id }}">

                            <button>Add to cart</button>
                        </form>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Prodotti</a></li>
                @if (session()->get('cart'))
                    <li><a href="{{ route('carts.index') }}">Carrello</a></li>
                @endif
                <li><a href="{{ route('php.index') }}">Argomenti PHP</a></li>
            </ul>
        </nav>
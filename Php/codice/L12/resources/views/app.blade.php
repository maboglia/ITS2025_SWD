<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
>
</head>
<body>
    
    <div class="container">

        <nav>
            <ul>
                <li><a href="{{ route('products.index') }}">Prodotti</a></li>
                <li><a href="{{ route('carts.index') }}">Carrello</a></li>
            </ul>
        </nav>


        @yield('contenuto')


    </div>

</body>
</html>

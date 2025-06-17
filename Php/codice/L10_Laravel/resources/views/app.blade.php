<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" >
</head>
<body>
    
    <div class="container">

        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('libri.index') }}">Libri</a></li>
                <li><a href="{{ route('editori.index') }}">Editori</a></li>
                <li><a href="{{ route('autori.index') }}">Autori</a></li>
            </ul>
        </nav>

        <h1>{{ $titolo }}</h1>


        @yield('content')
        
    </div>

    @yield(section: 'footer')

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <section class="section">
            <h1>books</h1>
            @foreach ($books as $book)
                <div class="card">
                    <h2>book ID: {{ $book->id }}</h2>
                    <p><strong>Código:</strong> {{ $book->code }}</p>
                    <p><strong>Título:</strong> {{ $book->title }}</p>
                    <p><strong>ISBN:</strong> {{ $book->ISBN }}</p>
                    <p><strong>Editorial:</strong> {{ $book->editorial }}</p>
                    <p><strong>Páginas:</strong> {{ $book->pages }}</p>
                </div>
            @endforeach
        </section>
    </div>
</body>
</html>
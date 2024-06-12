<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libros</title>
</head>
<body>
    <h1>Lista de libros</h1>
    <a href="{{ route('books.create') }}">Crear nuevo libro</a>
    <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }}
                <a href="{{ route('books.edit', $book->id) }}"><button type="button">Editar</button></a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
    <div>
      {{ $books->links();}}
    </div>
</body>
</html>
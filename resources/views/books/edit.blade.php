<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
</head>
<body>
    <h1>Editar libro</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="code">Código:</label>
        <input type="text" name="code" id="code" value="{{ $book->code }}" required>
        <br>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}" required>
        <br>
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN" value="{{ $book->ISBN }}" required>
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" value="{{ $book->editorial }}" required>
        <br>
        <label for="pages">Páginas:</label>
        <input type="number" name="pages" id="pages" value="{{ $book->pages }}" required>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
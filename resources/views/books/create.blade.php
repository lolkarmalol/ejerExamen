<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Libro</title>
</head>
<body>
    <h1>Crear nuevo libro</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="code">Código:</label>
        <input type="text" name="code" id="code" required>
        <br>
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <br>
        <label for="ISBN">ISBN:</label>
        <input type="text" name="ISBN" id="ISBN" required>
        <br>
        <label for="editorial">Editorial:</label>
        <input type="text" name="editorial" id="editorial" required>
        <br>
        <label for="pages">Páginas:</label>
        <input type="text" name="pages" id="pages" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
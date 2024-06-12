<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;

class BookController extends Controller
{
    public function index()
    {
        $books = book::latest()->paginate();
        return view('books.index', ['books' => $books]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'editorial' => 'required',
            'pages' => 'required|integer',
        ]);

        book::create($validatedData);
        return redirect()->route('books.index')->with('success', 'Libro creado exitosamente');
    }

    public function edit(book $book)
    {
        return view('books.edit', ['book' => $book]);
    }

    public function update(Request $request, book $book)
    {
        $validatedData = $request->validate([
            'code' => 'required',
            'title' => 'required',
            'ISBN' => 'required',
            'editorial' => 'required',
            'pages' => 'required|integer',
        ]);

        $book->update($validatedData);
        return redirect()->route('books.index')->with('success', 'Libro actualizado exitosamente');
    }

    public function destroy(book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Libro eliminado exitosamente');
    }

    public function show(book $book) {
        return view('books.show', compact('book'));
    }
}

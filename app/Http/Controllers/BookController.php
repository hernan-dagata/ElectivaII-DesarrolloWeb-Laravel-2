<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Editorial;
use App\Models\Author;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('editorial', 'author')->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $editorials = Editorial::all();
        $authors = Author::all();
        return view('books.create', compact('editorials', 'authors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Codigo' => 'required',
            'Titulo' => 'required',
            'ISBN' => 'required',
            'Paginas' => 'required|numeric',
            'editorial_id' => 'required|exists:editorials,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        Book::create($data);

        return redirect()->route('books.index')->with('success', 'Libro creado correctamente');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $editorials = Editorial::all();
        $authors = Author::all();
        return view('books.edit', compact('book', 'editorials', 'authors'));
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'Codigo' => 'required',
            'Titulo' => 'required',
            'ISBN' => 'required',
            'Paginas' => 'required|numeric',
            'editorial_id' => 'required|exists:editorials,id',
            'author_id' => 'required|exists:authors,id',
        ]);

        $book->update($data);

        return redirect()->route('books.index')->with('success', 'Libro actualizado correctamente');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Libro eliminado correctamente');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $author = Author::create($request->all());
        return redirect()->route('authors.index')->with('success', 'Autor creado correctamente');
    }

    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'Cedula' => 'required',
            'Nombre' => 'required',
        ]);

        $author->update($data);

        return redirect()->route('authors.index')
            ->with('success', 'Autor actualizado correctamente');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Autor eliminado correctamente');
    }
}

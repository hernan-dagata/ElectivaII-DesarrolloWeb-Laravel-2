<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ejemplar;
use App\Models\Book;

class EjemplarController extends Controller
{
    public function index()
    {
        $ejemplars = Ejemplar::with('book')->get();
        $books = Book::all();
        return view('ejemplars.index', compact('ejemplars', 'books'));
    }

    public function create()
    {
        $books = Book::all();
        return view('ejemplars.create', compact('books'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Codigo' => 'required|unique:ejemplars',
            'Localizacion' => 'required',
            'book_id' => 'required|exists:books,id',
        ]);
        Ejemplar::create($data);
        return redirect()->route('ejemplars.index')->with('success', 'Ejemplar creado correctamente');
    }

    public function show(Ejemplar $ejemplar)
    {
        return view('ejemplars.show', compact('ejemplar'));
    }

    public function edit(Ejemplar $ejemplar)
    {
        $books = Book::all();
        return view('ejemplars.edit', compact('ejemplar', 'books'));
    }


    public function update(Request $request, Ejemplar $ejemplar)
    {
        $data = $request->validate([
            'Codigo' => 'required|unique:ejemplars,Codigo,' . $ejemplar->id,
            'Localizacion' => 'required',
            'book_id' => 'required|exists:books,id',
        ]);
        $ejemplar->update($data);
        return redirect()->route('ejemplars.index')->with('success', 'Ejemplar actualizado correctamente');
    }

    public function destroy(Ejemplar $ejemplar)
    {
        $ejemplar->delete();
        return redirect()->route('ejemplars.index')->with('success', 'Ejemplar eliminado correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    public function index()
    {
        $editorials = Editorial::all();
        return view('editorials.index', compact('editorials'));
    }

    public function create()
    {
        return view('editorials.create');
    }

    public function store(Request $request)
    {
        $editorial = Editorial::create($request->all());
        return redirect()->route('editorials.index')->with('success', 'Editorial creada correctamente');
    }

    public function show(Editorial $editorial)
    {
        return view('editorials.show', compact('editorial'));
    }

    public function edit(Editorial $editorial)
    {
        return view('editorials.edit', compact('editorial'));
    }

    public function update(Request $request, Editorial $editorial)
    {
        $editorial->update($request->all());
        return redirect()->route('editorials.index')->with('success', 'Editorial actualizada correctamente');
    }

    public function destroy(Editorial $editorial)
    {
        $editorial->delete();
        return redirect()->route('editorials.index')->with('success', 'Editorial eliminada correctamente');
    }
}

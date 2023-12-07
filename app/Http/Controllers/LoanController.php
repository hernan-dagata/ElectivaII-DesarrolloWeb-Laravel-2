<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Customer;
use App\Models\Ejemplar;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with('customer', 'ejemplar')->get();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $customers = Customer::all();
        $ejemplars = Ejemplar::all();
        
        return view('loans.create', compact('customers', 'ejemplars'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'ejemplar_id' => 'required|exists:ejemplars,id',
            'FechaPrestamo' => 'required|date',
            'FechaDevolucion' => 'nullable|date',
        ]);

        Loan::create($data);

        return redirect()->route('loans.index')->with('success', 'Préstamo creado correctamente');
    }

    public function show(Loan $loan)
    {
        return view('loans.show', compact('loan'));
    }

    public function edit(Loan $loan)
    {
        $customers = Customer::all();
        $ejemplars = Ejemplar::all();

        return view('loans.edit', compact('loan', 'customers', 'ejemplars'));
    }

    public function update(Request $request, Loan $loan)
    {
        $data = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'ejemplar_id' => 'required|exists:ejemplars,id',
            'FechaPrestamo' => 'required|date',
            'FechaDevolucion' => 'nullable|date',
        ]);

        $loan->update($data);

        return redirect()->route('loans.index')->with('success', 'Préstamo actualizado correctamente');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();

        return redirect()->route('loans.index')->with('success', 'Préstamo eliminado correctamente');
    }
}

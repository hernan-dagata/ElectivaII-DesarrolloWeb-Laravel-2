<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Codigo' => 'required|unique:customers',
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        Customer::create($data);

        return redirect()->route('customers.index')->with('success', 'Cliente creado correctamente');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
        $data = $request->validate([
            'Codigo' => 'required|unique:customers,Codigo,' . $customer->id,
            'Nombre' => 'required',
            'Telefono' => 'required',
            'Direccion' => 'required',
        ]);

        $customer->update($data);

        return redirect()->route('customers.index')->with('success', 'Cliente actualizado correctamente');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('success', 'Cliente eliminado correctamente');
    }
}

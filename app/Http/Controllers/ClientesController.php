<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Http\Requests\StoreClientesRequest;
use App\Http\Requests\UpdateClientesRequest;
use Inertia\Inertia;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clientes::all(); // Usar all() en vez de get() para obtener todos los registros
        return Inertia::render('Clientes/index', [
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Clientes/ClienteNew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientesRequest $request)
    {
        // Crear un nuevo cliente con los datos validados
        Clientes::create($request->validated());

        // Redirigir a otra página o devolver una respuesta, según la lógica de tu aplicación
        return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientes $cliente)
    {
        // Implementar si es necesario
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientes $cliente)
    {
        return Inertia::render('Clientes/ClienteEdit', [
            'cliente' => $cliente
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientesRequest $request, Clientes $cliente)
    {
        
        $cliente->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,

        ]);

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();

        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}

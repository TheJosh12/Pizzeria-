<?php

namespace App\Http\Controllers;

use App\Models\Pizzas;
use App\Http\Requests\StorePizzasRequest;
use App\Http\Requests\UpdatePizzasRequest;
use Inertia\Inertia;

class PizzasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizzas::get();
        return Inertia::render('Pizzas/index',[
            'pizzas'=> $pizzas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Pizzas/PizzasNew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePizzasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pizzas $pizzas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pizzas $pizzas)
    {
        return Inertia::render('Pizzas/PizzasEdit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePizzasRequest $request, Pizzas $pizzas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pizzas $pizzas)
    {
        //
    }
}

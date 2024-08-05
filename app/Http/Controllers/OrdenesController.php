<?php

namespace App\Http\Controllers;

use App\Models\Ordenes;
use App\Http\Requests\StoreOrdenesRequest;
use App\Http\Requests\UpdateOrdenesRequest;
use Inertia\Inertia;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $ordens= Ordenes::get();
        return Inertia::render('Ordenes/index',[
            'ordens'=> $ordens
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Ordenes/OrdenNew');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrdenesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordenes $ordenes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordenes $ordenes)
    {
        return Inertia::render('Ordenes/OrdenEdit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrdenesRequest $request, Ordenes $ordenes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordenes $ordenes)
    {
        //
    }
}

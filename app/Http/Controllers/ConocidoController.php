<?php

namespace App\Http\Controllers;

use App\Models\Conocido;
use App\Http\Requests\StoreConocidoRequest;
use App\Http\Requests\UpdateConocidoRequest;
use Illuminate\Support\Facades\Hash;

class ConocidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Conocido::all();
        return view("conocidos.index", compact('todos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("conocidos.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConocidoRequest $request)
    {
        $nuevo = new Conocido();
        $nuevo->fill($request->all());
        $nuevo->clave = Hash::make($request->input('clave'));
        $nuevo->save();

        return redirect(route('ropciones'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Conocido $conocido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conocido $conocido)
    {
        return view('conocidos.edit', compact('conocido'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConocidoRequest $request, Conocido $conocido)
    {
        $conocido->fill($request->input('nombre'));
        $conocido->save();

        return redirect(route('conocidos.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conocido $conocido)
    {
        $conocido->delete();

        return redirect(route('docentes.index'));
    }
}

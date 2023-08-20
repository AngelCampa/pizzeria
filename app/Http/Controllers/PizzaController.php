<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pizzas.create');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            // Agrega más reglas de validación según tus requisitos
        ]);
    
        // Crea una nueva instancia de Pizza
        $pizza = new Pizza([
            'nombre' => $validatedData['nombre'],
            'precio' => $validatedData['precio'],
            // Agrega más campos según tus requisitos
        ]);
    
        // Guarda la pizza en la base de datos
        $pizza->save();
    
        return redirect()->route('pizzas.index')->with('success', 'Pizza creada exitosamente');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.edit', ['pizza' => $pizza]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'nombre' => 'required|string',
            'precio' => 'required|numeric',
            // Agrega más reglas de validación según tus requisitos
        ]);
    
        $pizza = Pizza::findOrFail($id);
    
        // Actualiza los campos de la pizza
        $pizza->nombre = $validatedData['nombre'];
        $pizza->precio = $validatedData['precio'];
        // Actualiza más campos según tus requisitos
        $pizza->save();
    
        return redirect()->route('pizzas.index')->with('success', 'Pizza actualizada exitosamente');
    }
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect()->route('pizzas.index')->with('success', 'Pizza eliminada exitosamente');
    }    
    
}

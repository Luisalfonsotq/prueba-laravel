<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ApiProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        return response()->json([
            'Estado' => true,
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $producto = Productos::create($request->validated());
        return response()->json([
            'estado' => true,
            'mensaje' => "¡Producto creado exitosamente!",
            'producto' => $producto
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Productos $productos)
    {
        return response()->json([
            'estado' => true,
            'producto' => $productos
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Productos $productos)
    {
        $productos->update($request->all());
        return response()->json([
            'estado' => true,
            'mensaje' => "¡Producto actualizado exitosamente!",
            'producto' => $productos
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Productos $productos)
    {
        $productos->delete();
        return response()->json([
            'estado' => true,
            'mensaje' => "¡Producto eliminado exitosamente!"
        ], 200);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaProductos = Producto::all();
        return view('productos.index', ['listaProductos' => $listaProductos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'nombre_producto' => 'required',
            'categoria' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required',
            'fecha_creacion' => 'required|date',

        ]);

        $producto = new Producto();
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->categoria = $request->input('categoria');
        $producto->referencia = $request->input('referencia');
        $producto->precio = $request->input('precio');
        $producto->peso = $request->input('peso');
        $producto->categoria = $request->input('categoria');
        $producto->stock = $request->input('stock');
        $producto->fecha_creacion = $request->input('fecha_creacion');
        $producto->save();

        return view("productos.message", ['msg' => "Producto guardado exitosamente"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nombre_producto' => 'required',
            'categoria' => 'required',
            'referencia' => 'required',
            'precio' => 'required',
            'peso' => 'required',
            'categoria' => 'required',
            'stock' => 'required',
            'fecha_creacion' => 'required|date',

        ]);

        $producto = Producto::find($id);
        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->categoria = $request->input('categoria');
        $producto->referencia = $request->input('referencia');
        $producto->precio = $request->input('precio');
        $producto->peso = $request->input('peso');
        $producto->categoria = $request->input('categoria');
        $producto->stock = $request->input('stock');
        $producto->fecha_creacion = $request->input('fecha_creacion');
        $producto->save();

        return view("productos.message", ['msg' => "Producto actualizado exitosamente"]);
    }


        /**
     * Actualiza el stock luego de realizar una venta
     */
    public static function updateStock($id, $stock)
    {

        $producto = Producto::find($id);
        $producto->stock = $stock;
        $producto->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect("productos");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listaProductos = Producto::all();
        return view('ventas.index', ['listaProductos' => $listaProductos]);
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
    public function store(Request $request)
    {
        $request->validate([

            'id' => 'required',
            'nombre_producto' => 'required',
            'stock' => 'required',
            'cantidad' => 'required',

        ]);

        $nuevoStock = ($request->input('stock')) - ($request->input('cantidad'));

        if($nuevoStock<0){

            return view("ventas.message", ['msg' => "El stock es insuficiente para realizar la venta"]);

        }else{

            $venta = new Venta();
            $venta->nombre_producto = $request->input('nombre_producto');
            $venta->cantidad = $request->input('cantidad');
            $venta->fecha_venta = date('Y-m-d');
            $venta->id_producto = $request->input('id');
            $venta->save();

            ProductoController::updateStock($request->input('id'), $nuevoStock);

            return view("ventas.message", ['msg' => "Venta realizada exitosamente"]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Venta $venta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('ventas.create', ['producto' => $producto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venta $venta)
    {
        //
    }
}

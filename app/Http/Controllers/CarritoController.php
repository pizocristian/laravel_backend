<?php

namespace App\Http\Controllers;

use App\Carrito;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrito = Carrito::join('productos', 'productos.id_producto', '=' ,'carritos.id_producto1')
        ->select('productos.id_producto', 'productos.referencia', 'productos.descripcion' , 'productos.valor_unitario' , 'carritos.cantidad', 'id')
        ->get();
        return $carrito;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrito = Carrito::create($request->all());
        return $carrito;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        Carrito::truncate();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy($carrito)
    {
        
         Carrito::destroy($carrito);
        
         
        
    }
}
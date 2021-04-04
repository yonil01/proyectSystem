<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Category;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $productos =  Producto::all();
       $categories =  Category::all();
        return view('producto.index')->with([
            'productos'=> $productos,
            'categories'=> $categories

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Producto();
       
        $product->name = $request->get('name');
        $product->id_company="hola";
        $product->type_category = $request->get('category');
        $product->cost = $request->get('cost');
        $product->cost_delivery = $request->get('cost_delivery');
        $product->type_delivery = $request->get('type_delivery');
        $product->qualification = 0;
        $product->description = $request->get('description');
        $product->city_company = "Huanuco";
        $product->quantity = $request->get('quantity');
        $product->save();
        
        $newCategory = new Category();

        $newCategory->name = $request->get('category');
        $newCategory->save();


        /* return redirect('/producto'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\API;
use App\Models\Product as Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         echo"hello api";
        $product=Product::all();
        return response()->json($product,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product=new Product();
        $product->name =$request->name;
        $product->category_id =$request->category_id;
        $product->style_id =$request->style_id;
        $product->size =$request->size;
        $product->weight =$request->weight;
        $product->price =$request->price;
        $product->old_price =$request->old_price;
        $product->partner_id =$request->partner_id;
        $product->description =$request->description;

        $product->save();

        return response()->json($product->id,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products =Product::findOrFial($id);

        return response()->json($products,201);
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
        $product=Product::findOrFail($id);
        $product->name =$request->name;
        $product->category_id =$request->category_id;
        $product->style_id =$request->style_id;
        $product->size =$request->size;
        $product->weight =$request->weight;
        $product->price =$request->price;
        $product->old_price =$request->old_price;
        $product->partner_id =$request->partner_id;
        $product->description =$request->description;
        $product->save();

        return response()->json($products,201);
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);
        $product->delete(); 
        return response()->json($id,201);
  
    }
}

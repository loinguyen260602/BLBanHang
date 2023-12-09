<?php

namespace App\Http\Controllers;
use App\Models\Product as Product;
use App\Models\Category as Category;
use App\Models\Style as Style;
use App\Models\Partner as Partner;
use App\Http\Requests\StoreProduct; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them thu vien check errors
use Illuminate\Http\Request;
use File;// để upload
use Illuminate\Support\Facades\Gate;// phan quyen

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $productModel= new \App\Models\Product; dong 4 thay cho cai  nay
     // $products= Product::all();
     $products= Product::paginate(5);
       return View('product.index',['products'=>$products]);
      //  $products =$productModel->getAll();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        $categories=Category::all();
        $styles=Style::all();
        $partners=Partner::all();
        return View('product.new',["categories"=>$categories,
        "styles"=>$styles,
        "partners"=>$partners,
        "products"=>$products
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
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
        if( $request->hasfile('photos')){
            $dir=public_path('uploads')."/products/".$product->id;
            File::makeDirectory($dir);

            foreach($request->file('photos') as $file){
                $file->move($dir,$file->getClientOriginalName());
            }

        }
       return $this->index();
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show (StoreProduct $request ,$id)
    {
    $lang= $request->session()->get('language');
     echo"ban dang dung ngon ngu:".$lang;
        // $product=new Product();
        // $product->name =$request->name;
        // $product->category_id =$request->category_id;
        // $product->style_id =$request->style_id;
        // $product->size =$request->size;
        // $product->weight =$request->weight;
        // $product->price =$request->price;
        // $product->old_price =$request->old_price;
        // $product->partner_id =$request->partner_id;
        // $product->description =$request->description;
        // $product->save();
        // if( $request->hasfile('photos')){
        //     $dir=public_path('uploads')."/products/".$product->id;
        //     //Xoa thu muc cu
        //     if(File::exists($dir))
        //     File::deleteDirectory($dir);
        //         // Tạo thư mục hiên tại và thêm ảnh upload
        //     File::makeDirectory($dir);
    
        //     foreach($request->file('photos') as $file){
        //         $file->move($dir,$file->getClientOriginalName());
        //     }
    
        // }
        // return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =Product::findOrFail($id);
        $categories=Category::all();
        $styles=Style::all();
        $partners=Partner::all();

        return View('product.edit',["categories"=>$categories,
        "styles"=>$styles,
        "partners"=>$partners,
        "product"=>$product
    ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
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
  
       if( $request->hasfile('photos')){
        $dir=public_path('uploads')."/products/".$product->id;
        //Xoa thu muc cu
        if(File::exists($dir))
        File::deleteDirectory($dir);
            // Tạo thư mục hiên tại và thêm ảnh upload
        File::makeDirectory($dir);

        foreach($request->file('photos') as $file){
            $file->move($dir,$file->getClientOriginalName());
        }

    }
    return $this->index();
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
        $dir=public_path('uploads')."/products/".$product->id;
        //Xoa thu muc anh
        if(File::exists($dir))
        File::deleteDirectory($dir);

        return $this->index();
        //
    }
}

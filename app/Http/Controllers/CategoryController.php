<?php

namespace App\Http\Controllers;
use App\Models\Category as Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategory; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them thu vien check errors
use Illuminate\Http\RedirectResponse;// uy quyen phan quyen
use Illuminate\Support\Facades\Gate;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::paginate(5);;
        return View('category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
       
        return View('category.new',["categories"=>$categories
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $category=new Category();
        $category->name =$request->name;
       
        $category->parent_id =$request->parent_id;
        $category->feature =$request->feature;

        $category->description =$request->description;
        $category->save();
       return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=new Category();
        $category->name =$request->name;
       
        $category->parent_id =$request->parent_id;
        $category->feature =$request->feature;
        $category->description =$request->description;
        $category->save();
       return $this->index();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $category=Category::findOrFail($id);
      

        return View('category.edit',["category"=>$category
        
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id, Category $category): RedirectResponse
    {
        // if (! Gate::allows('update-category', $category)) {
        //     abort(403);
        // }
        $category=Category::findOrFail($id);
        $category->name =$request->name;
        
        $category->parent_id =$request->parent_id;
        $category->feature =$request->feature;
        $category->description =$request->description;
        $category->save();
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
        $category=Category::findOrFail($id);
        $category->delete();
        return $this->index();
    }
}

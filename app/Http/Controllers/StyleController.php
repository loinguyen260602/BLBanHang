<?php

namespace App\Http\Controllers;
use App\Models\Style as Style;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStyle; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//t
class StyleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $styles= Style::paginate(5);;
        return View('style.index',['styles'=>$styles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $styles=Style::all();
       
        return View('style.new',["styles"=>$styles
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStyle $request)
    {
        $style=new Style();
        $style->name =$request->name;
        $style->description =$request->description;
        $style->save();
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
        $style=new Style();
        $style->name =$request->name;
        $style->description =$request->description;
        $style->save();
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
        $style=Style::findOrFail($id);
        return View('style.edit',["style"=>$style]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreStyle $request, $id)
    {
        $style=Style::findOrFail($id);
        $style->name =$request->name;
        $style->description =$request->description;
        $style->save();
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
        $style=Style::findOrFail($id);
        $style->delete();
        return $this->index();
    }
}

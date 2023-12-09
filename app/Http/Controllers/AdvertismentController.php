<?php

namespace App\Http\Controllers;

use App\Models\Advertisment as Advertisment;
use Illuminate\Http\Request;
use App\Http\Requests\Storeadvertisment; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them thu vien check errors

class AdvertismentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $advertisments= Advertisment::paginate(5);;
        return View('advertisment.index',['advertisments'=>$advertisments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $advertisments= Advertisment::all();
        return View('advertisment.new',['advertisments'=>$advertisments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $advertisment=new Advertisment();
        $advertisment->content =$request->content;      
        $advertisment->started_time =$request->started_time;
        $advertisment->end_time =$request->end_time;
        $advertisment->description =$request->description;
        $advertisment->save();
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
        $advertisment=new Advertisment();
        $advertisment->content =$request->content;      
        $advertisment->started_time =$request->started_time;
        $advertisment->end_time =$request->end_time;
        $advertisment->description =$request->description;
        $advertisment->save();
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
        $advertisment=Advertisment::findOrFail($id);
      

        return View('advertisment.edit',["advertisment"=>$advertisment
        
    ]);
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
        
        $advertisment=Advertisment::findOrFail($id);
        $advertisment->content =$request->content;      
        $advertisment->started_time =$request->started_time;
        $advertisment->end_time =$request->end_time;
        $advertisment->description =$request->description;
        $advertisment->save();
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
        $advertisment=Advertisment::findOrFail($id);
        $advertisment->delete();
        return $this->index();
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Business as Business;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBusiness; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them thu vien check errors
class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesss= Business::paginate(5);
        return View('business.index',['businesss'=>$businesss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businesss=Business::all();
       
        return View('business.new',["businesss"=>$businesss
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBusiness $request)
    {
        $business=new Business();
        $business->name =$request->name;
        $business->bank_information=$request->bank_information;
        $business->phone =$request->phone;
        $business->email =$request->email;
        $business->website =$request->website;
        $business->fanpage =$request->fanpage;
        $business->description =$request->description;
        $business->description =$request->description;
        $business->save();
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
        $business=new Business();
        $business->name =$request->name;
        $business->bank_information=$request->bank_information;
        $business->phone =$request->phone;
        $business->email =$request->email;
        $business->website =$request->website;
        $business->fanpage =$request->fanpage;
        $business->description =$request->description;
        $business->save();
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
        
        $business=Business::findOrFail($id);
        return View('business.edit',["business"=>$business     
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBusinesss $request, $id)
    {
        $business=Business::findOrFail($id);
        $business->name =$request->name;
        $business->bank_information=$request->bank_information;
        $business->phone =$request->phone;
        $business->email =$request->email;
        $business->website =$request->website;
        $business->fanpage =$request->fanpage;
        $business->description =$request->description;
        $business->save();
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
        $business=Business::findOrFail($id);
        $business->delete();
        return $this->index();
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Partner as Partner;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartner; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them thu vien check errors
class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners= Partner::paginate(5);;
        return View('partner.index',['partners'=>$partners]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners=Partner::all();
       
        return View('partner.new',["partners"=>$partners
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartner $request)
    {
        $partner=new Partner();
        $partner->name =$request->name;
       
        $partner->phone =$request->phone;
        $partner->email =$request->email;
        $partner->website =$request->website;
        $partner->desctiption =$request->desctiption;
        $partner->save();
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
        $partner=new Partner();
        $partner->name =$request->name;
       
        $partner->phone =$request->phone;
        $partner->email =$request->email;
        $partner->website =$request->website;
        
        $partner->desctiption =$request->desctiption;
        $partner->save();
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
        $partner=Partner::findOrFail($id);
        return View('partner.edit',["partner"=>$partner     
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePartner $request, $id)
    {
        $partner=Partner::findOrFail($id);
        $partner->name =$request->name;
        
        $partner->phone =$request->phone;
        $partner->email =$request->email;
        $partner->website =$request->website;
        $partner->desctiption =$request->desctiption;
        $partner->save();
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
        $partner=Partner::findOrFail($id);
        $partner->delete();
        return $this->index();
    }
}

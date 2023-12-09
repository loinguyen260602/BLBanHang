<?php

namespace App\Http\Controllers;
use App\Models\Customer as Customer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCustomer; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;//them 
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers= Customer::paginate(5);;
        return View('customer.index',['customers'=>$customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=Customer::all();
       
        return View('customer.new',["customers"=>$customers
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomer $request)
    {
        $customer=new Customer();
        $customer->fullname =$request->fullname;
        $customer->sex =$request->sex;
        $customer->DOB =$request->DOB;
        $customer->address =$request->address;
        $customer->phone =$request->phone;
        $customer->email =$request->email;  
        $customer->description =$request->description;
        $customer->save();
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
        $customer=new Customer();
        $customer->fullname =$request->fullname;
        $customer->sex =$request->sex;
        $customer->DOB =$request->DOB;
        $customer->address =$request->address;
        $customer->phone =$request->phone;
        $customer->email =$request->email;  
        $customer->description =$request->description;
        $customer->description =$request->description;
        $customer->save();
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
        $customer=Customer::findOrFail($id);
      

        return View('customer.edit',["customer"=>$customer
        
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCustomer $request, $id)
    {
        $customer=Customer::findOrFail($id);
        $customer->fullname =$request->fullname;
        $customer->sex =$request->sex;
        $customer->DOB =$request->DOB;
        $customer->address =$request->address;
        $customer->phone =$request->phone;
        $customer->email =$request->email;  
        $customer->description =$request->description;
       
        $customer->save();
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
        $customer=Customer::findOrFail($id);
        $customer->delete();
        return $this->index();
    }
}

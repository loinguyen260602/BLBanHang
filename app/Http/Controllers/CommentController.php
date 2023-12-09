<?php

namespace App\Http\Controllers;
use App\Models\Product as Product;
use App\Models\Comment as Comment;
use App\Models\Customer as Customer;
use Illuminate\Http\Request;
use App\Http\Requests\Storecomment; // them class vo de su dung check lỗi
use Illuminate\Contracts\Validation\Vilidator;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments= Comment::paginate(5);;
        return View('comment.index',['comments'=>$comments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products=Product::all();
        $customer=Customer::all();
        
        return View('comment.new',["products"=>$products,
        "customers"=>$customers
        
    ]);
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=new Comment();
        $comment->customer_id =$request->customer_id;
        $comment->product_id =$request->product_id;    
        $comment->rating =$request->rating;
        $comment->comment =$request->comment;
        $comment->commented_date =$request->commented_date;
       
        $comment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment=new Comment();
        $comment->customer_id =$request->customer_id;
        $comment->product_id =$request->product_id;    
        $comment->rating =$request->rating;
        $comment->comment =$request->comment;
        $comment->commented_date =$request->commented_date;
        $comment->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment =Comment::findOrFail($id);
        
        $customers=Customer::all();
        $products=Product::all();

        return View('comment.edit',["customers"=>$customers,
        "products"=>$products,
        "comment"=>$comment
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
        $comment=Comment::findOrFail($id);
        $comment->customer_id =$request->customer_id;
        $comment->product_id =$request->product_id;    
        $comment->rating =$request->rating;
        $comment->comment =$request->comment;
        $comment->commented_date =$request->commented_date;
        $comment->save();
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
        $comment=Comment::findOrFail($id);
        $comment->delete();
        return $this->index();
    }
}

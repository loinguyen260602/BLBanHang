@extends('layouts.app')
@section("content")
<div class="container">
<h3> Sửa bình luận </h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('product.update',['product' =>$product->id])}}" method="POST">
    @method('PUT')
   @csrf
<div class="form-group">
<label for="name">Tên sản phẩm</label>
<input value="{{old('name')?old('name'):$product->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter name">
   
</div>
<div class="form-group">
<label for="category_id">Danh mục</label>
<select name="category_id" type="..." class="form-control" id="category_id" aria-describedby="category_idlHelp" placeholder="Enter category_id">
   @foreach($categories as $category)
   <option value="{{$category->id}}" {{$category->id== (old('category_id')?old('category_id'):$product->category_id)?"selected":""}}>{{$category->name}}</option>
   @endforeach
</select>
</div>
<div class="form-group">
<label for="style_id">Kiểu</label>
<select name="style_id" type="..." class="form-control" id="style_id" aria-describedby="style_idlHelp" placeholder="Enter style_id">
   @foreach($styles as $style)
   <option value="{{$style->id}}" {{$style->id== (old('style_id')?old('style_id'):$product->style_id)?"selected":""}}>{{$style->name}}</option>
   @endforeach
</select>
   
</div>
<div class="form-group">
<label for="size">Kích thước</label>
<input name="size" value="{{old('size')?old('size'):$product->size}}" type="text" class="form-control" id="size" aria-describedby="sizelHelp" placeholder="Enter size">
   
</div>
<div class="form-group">
<label for="weight">Trọng lượng</label>
<input name="weight" value="{{old('weight')?old('weight'):$product->weight}}" type="text" class="form-control" id="weight" aria-describedby="weightlHelp" placeholder="Enter weight">
   
</div>
<div class="form-group">
<label for="price">Giá</label>
<input name="price" value="{{old('price')?old('price'):$product->price}}" type="text" class="form-control" id="price" aria-describedby="pricelHelp" placeholder="Enter price">
   
</div>
<div class="form-group">
<label for="old_price">Giá cũ</label>
<input name="old_price" value="{{old('old_price')?old('old_price'):$product->old_price}}" type="text" class="form-control" id="old_price" aria-describedby="old_pricelHelp" placeholder="Enter old_price">
   
</div>
<div class="form-group">
<label for="partner_id">Nhà sản xuất</label>
<select name="partner_id" type="..." class="form-control" id="partner_id" aria-describedby="partner_idlHelp" placeholder="Enter partner_id">
   @foreach($partners as $partner)
   <option value="{{$partner->id}}" {{$partner->id==(old('partner_id')?old('partner_id'):$product->partner_id)?"selected":""}}>{{$partner->name}}</option>
   @endforeach
</select>
   
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')?old('description'):$product->description}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Sửa</button>
</form>
@endsection
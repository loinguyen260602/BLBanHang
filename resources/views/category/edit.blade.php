@extends('layouts.app')
@section("content")
<div class="container">
<h3> Sửa loại sản phẩm</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('category.update',['category' =>$category->id])}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
   @csrf
<div class="form-group">
<label for="name">Tên sản phẩm</label>
<input value="{{old('name')?old('name'):$category->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter name">
</div>

<div class="form-group">
<label for="parent_id">Nhà sản xuất</label>
<input value="{{old('parent_id')?old('parent_id'):$category->parent_id}}" name="parent_id" type="text" class="form-control" id="parent_id" aria-describedby="parent_idlHelp" placeholder="Enter parent_id">
</div>

<div class="form-group">
<label for="feature">Tính năng</label>
<input value="{{old('feature')?old('feature'):$category->feature}}" name="feature" type="text" class="form-control" id="feature" aria-describedby="featurelHelp" placeholder="Enter feature">
</div>

<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')?old('description'):$category->description}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Sửa</button>
</form>
@endsection
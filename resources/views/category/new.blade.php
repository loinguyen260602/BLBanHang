@extends('layouts.app')
@section("content")
<div class="container">
<h3> Thêm loại sản phẩm</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('category.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="name">Tên sản phẩm</label>
<input name="name" value="{{old('name')}}" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter name">
</div>

<div class="form-group">
<label for="parent_id">Nhà sản xuất</label>
<input name="parent_id" value="{{old('parent_id')}}" type="text" class="form-control" id="parent_id" aria-describedby="parent_idlHelp" placeholder="Enter parent_id">
</div>
<div class="form-group">
<label for="feature">Tính năng</label>
<input name="feature" value="{{old('feature')}}" type="text" class="form-control" id="feature" aria-describedby="featurelHelp" placeholder="Enter feature">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Thêm</button>
</form>
@endsection
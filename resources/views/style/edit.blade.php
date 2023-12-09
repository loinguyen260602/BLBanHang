@extends('layouts.app')
@section("content")
<div class="container">
<style>
    svg{width:50px;}
</style>
<h3> Sửa kiểu</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('style.update',['style' =>$style->id])}}" method="POST">
    @method('PUT')
   @csrf
<div class="form-group">
<label for="name">Tên kiểu</label>
<input value="{{old('name')?old('name'):$style->name}}" name="name" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter name">
</div>


<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')?old('description'):$style->description}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Sửa</button>
</form>
@endsection
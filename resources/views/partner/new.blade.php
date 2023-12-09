@extends('layouts.app')
@section("content")
<div class="container">
<h3> Thêm đối tác</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('partner.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="name">Tên đối tác</label>
<input value="{{old('name')}}" name="name" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter name">
</div>

<div class="form-group">
<label for="phone">số điện thoại</label>
<input value="{{old('phone')}}" name="phone" type="text" class="form-control" id="phone" aria-describedby="phonelHelp" placeholder="Enter phone">
</div>

<div class="form-group">
<label for="email">email</label>
<input value="{{old('email')}}" name="email" type="text" class="form-control" id="email" aria-describedby="emaillHelp" placeholder="Enter email">
</div>

<div class="form-group">
<label for="website">website</label>
<input value="{{old('website')}}" name="website" type="text" class="form-control" id="website" aria-describedby="websitelHelp" placeholder="Enter website">
</div>

<div class="form-group">
<label for="desctiption">Mô tả</label>
<textarea name="desctiption" class="form-control" id="desctiption" aria-describedby="desctiptionlHelp" placeholder="Enter desctiption">{{old('desctiption')}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Thêm</button>
</form>
@endsection
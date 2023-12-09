@extends('layouts.app')
@section("content")
<div class="container">
<h3> Thêm Khách hàng</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('customer.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="fullname">Tên khách hàng</label>
<input value="{{old('fullname')}}" name="fullname" type="text" class="form-control" id="fullname" aria-describedby="fullnamelHelp" placeholder="Enter name">
</div>

<div class="form-group">
<label for="sex">Giới tính</label>
<input value="{{old('sex')}}" name="sex" type="text" class="form-control" id="sex" aria-describedby="sexlHelp" placeholder="Enter sex">
</div>

<div class="form-group">
<label for="DOB">Ngày sinh</label>
<input value="{{old('DOB')}}" name="DOB" type="text" class="form-control" id="DOB" aria-describedby="DOBlHelp" placeholder="Enter DOB">
</div>

<div class="form-group">
<label for="address">Địa chỉ</label>
<input value="{{old('address')}}" name="address" type="text" class="form-control" id="address" aria-describedby="addresslHelp" placeholder="Enter address">
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
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Thêm</button>
</form>
@endsection
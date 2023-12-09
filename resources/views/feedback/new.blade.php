@extends('layouts.app')
@section("content")
<div class="container">
<h3> Thêm trạng thái</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('feedback.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="fullname">Tên người phản hồi</label>
<input value="{{old('fullname')}}" name="fullname" type="text" class="form-control" id="fullname" aria-describedby="fullnamelHelp" placeholder="Enter fullname">
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
<label for="title">Tiêu đề</label>
<input value="{{old('title')}}" name="title" type="text" class="form-control" id="title" aria-describedby="titlelHelp" placeholder="Enter title">
</div>

<div class="form-group">
<label for="content">Nội dung</label>
<input value="{{old('content')}}" name="content" type="text" class="form-control" id="content" aria-describedby="contentlHelp" placeholder="Enter content">
</div>

<div class="form-group">
<label for="status">Trạng thái</label>
<textarea name="status" class="form-control" id="status" aria-describedby="statuslHelp" placeholder="Enter status">{{old('status')}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Thêm</button>
</form>
@endsection
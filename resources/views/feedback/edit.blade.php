@extends('layouts.app')
@section("content")
<div class="container">
<h3> Sửa phản hồi</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('feedback.update',['feedback' =>$feedback->id])}}" method="POST">
    @method('PUT')
   @csrf
<div class="form-group">
<label for="fullname">Tên người phản hồi</label>
<input value="{{old('fullname')?old('fullname'):$feedback->fullname}}" name="fullname" type="text" class="form-control" id="name" aria-describedby="namelHelp" placeholder="Enter fullname">
</div>



<div class="form-group">
<label for="phone">số điện thoại</label>
<input value="{{old('phone')?old('phone'):$feedback->phone}}" name="phone" type="text" class="form-control" id="phone" aria-describedby="phonelHelp" placeholder="Enter phone">
</div>

<div class="form-group">
<label for="email">email</label>
<input value="{{old('email')?old('email'):$feedback->email}}" name="email" type="text" class="form-control" id="email" aria-describedby="emaillHelp" placeholder="Enter email">
</div>

<div class="form-group">
<label for="title">title</label>
<input value="{{old('title')?old('title'):$feedback->title}}" name="title" type="text" class="form-control" id="title" aria-describedby="titlelHelp" placeholder="Enter title">
</div>

<div class="form-group">
<label for="content">Nội dung</label>
<input value="{{old('content')?old('content'):$feedback->content}}" name="content" type="text" class="form-control" id="content" aria-describedby="contentlHelp" placeholder="Enter content">
</div>

<div class="form-group">
<label for="status">Trạng thái</label>
<textarea name="status" class="form-control" id="status" aria-describedby="statuslHelp" placeholder="Enter status">{{old('status')?old('status'):$feedback->status}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Sửa</button>
</form>
@endsection
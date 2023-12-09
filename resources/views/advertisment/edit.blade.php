@extends('layouts.app')
@section("content")
<div class="container">
<h3> Sửa Quảng cáo</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('advertisment.update',['advertisment' =>$advertisment->id])}}" method="POST">
    @method('PUT')
   @csrf
<div class="form-group">
<label for="content">Nội dung</label>
<input value="{{old('content')?old('content'):$advertisment->content}}" name="content" type="text" class="form-control" id="content" aria-describedby="contentlHelp" placeholder="Enter content">
</div>

<div class="form-group">
<label for="started_time">thời gian bắt đầu</label>
<input value="{{old('started_time')?old('started_time'):$advertisment->started_time}}" name="started_time" type="text" class="form-control" id="started_time" aria-describedby="started_timelHelp" placeholder="Enter started_time">
</div>

<div class="form-group">
<label for="end_time">thời gian kết thúc</label>
<input value="{{old('end_time')?old('end_time'):$advertisment->end_time}}" name="end_time" type="text" class="form-control" id="end_time" aria-describedby="end_timelHelp" placeholder="Enter end_time">
</div>

<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')?old('description'):$advertisment->description}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Sửa</button>
</form>
@endsection
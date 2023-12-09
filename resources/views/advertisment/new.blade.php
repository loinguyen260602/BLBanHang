@extends('layouts.app')
@section("content")
<div class="container">
<h3> Thêm Quảng cáo</h3>
@if(count($errors)>0)
   <div class="alert alert-danger">
      <ul>
         @foreach($errors->all() as $error_message)
         <li>{{$error_message}}</li>
         @endforeach
      </ul>
  </div>
@endif

<form action="{{route('advertisment.store')}}" method="POST">
@csrf
<div class="form-group">
<label for="content">Nội dung</label>
<input name="content" value="{{old('content')}}" type="text" class="form-control" id="content" aria-describedby="contentlHelp" placeholder="Enter content">
</div>

<div class="form-group">
<label for="started_time">thời gian bắt đầu</label>
<input name="started_time" value="{{old('started_time')}}" type="text" class="form-control" id="started_time" aria-describedby="started_timelHelp" placeholder="Enter started_time">
</div>
<div class="form-group">
<label for="end_time">thời gian kết thúc</label>
<input name="end_time" value="{{old('end_time')}}" type="text" class="form-control" id="end_time" aria-describedby="end_timelHelp" placeholder="Enter end_time">
</div>
<div class="form-group">
<label for="description">Mô tả</label>
<textarea name="description" class="form-control" id="description" aria-describedby="descriptionlHelp" placeholder="Enter description">{{old('description')}}</textarea>
</div>

<button type="submit" class="btn btnprimary">Thêm</button>
</form>
@endsection
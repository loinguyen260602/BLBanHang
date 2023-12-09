@extends('layouts.app')
@section("content")
<div class="container">
<style>
    svg{width:50px;}
</style>
<h3> Danh sách phản hồi</h3>
<a href="{{route('feedback.create')}}"><button>Thêm phản hồi</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Tên người phản hồi</th>
    <th>Số điện thoại</th>
    <th>email</th>
    <th>tiêu đề</th>
    <th>nội dung</th>
    <th>trạng thái</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($feedbacks as $feedback)
</tr>
<td>{{$feedback->id}}</td>
<td>{{$feedback->fullname}}</td>
<td>{{$feedback->phone}}</td>
<td>{{$feedback->email}}</td>
<td>{{$feedback->title}}</td>
<td>{{$feedback->content}}</td>
<td>{{$feedback->status}}</td>
<td>
    <a href="{{route('feedback.edit',['feedback'=>$feedback->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('feedback.destroy',['feedback'=>$feedback->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$feedbacks->links()}}
</div>
@endsection
@extends('layouts.app')
@section("content")
<div class="container">
<h3> Bình luận</h3>
<style>
    svg{width:50px;}
</style>
<a href="{{route('comment.create')}}"><button>Thêm bình luận</button></a>

<table class="table table-bordered">

<tr>
    <th>Khách Hàng</th>
    <th>Sản phẩm</th>
    <th>Tỉ lệ</th>
    <th>bình luận</th>
    <th>Thời gian bình luận</th>
</tr>
  @foreach($comments as $comment)
</tr>
<td>{{$comment->customer_id}}</td>
<td>{{$comment->comment_id}}</td>
<td>{{$comment->id}}</td>
<td>{{$comment->comment}}</td>
<td>{{$comment->commented_date}}</td>

<td>
    <a href="{{route('comment.edit',['comment'=>$comment->id])}}">
        <button>Sửa</button>
    </a>
    <form action="{{route('comment.destroy',['comment'=>$comment->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Xoá" onclick=" return confirm('Ban co thuc su muon xoa?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$comments->links()}}
</div>
@endsection
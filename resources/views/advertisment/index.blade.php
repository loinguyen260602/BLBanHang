@extends('layouts.app')
@section("content")
<style>
    svg{width:50px;}
</style>
<div class="container">
<h3> Danh sách Quảng cáo</h3>
<a href="{{route('advertisment.create')}}"><button>Thêm Quảng cáo</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Nội dung</th>
    <th>thời gian bắt đầu</th>
    <th>thời gian kết thúc</th>
    <th>Ghi chú</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($advertisments as $advertisment)
</tr>
<td>{{$advertisment->id}}</td>
<td>{{$advertisment->content}}</td>
<td>{{$advertisment->started_time}}</td>
<td>{{$advertisment->end_time}}</td>
<td>{{$advertisment->description}}</td>
<td>
    <a href="{{route('advertisment.edit',['advertisment'=>$advertisment->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('advertisment.destroy',['advertisment'=>$advertisment->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$advertisments->links()}}
</div>
@endsection
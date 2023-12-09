@extends('layouts.app')
@section("content")
<div class="container">
<style>
    svg{width:50px;}
</style>
<h3> Danh sách đối tác</h3>
<a href="{{route('partner.create')}}"><button>Thêm đối tác</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Số điện thoại</th>
    <th>email</th>
    <th>Website</th>
    <th>Ghi chú</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($partners as $partner)
</tr>
<td>{{$partner->id}}</td>
<td>{{$partner->name}}</td>
<td>{{$partner->phone}}</td>
<td>{{$partner->email}}</td>
<td>{{$partner->website}}</td>
<td>{{$partner->desctiption}}</td>
<td>
    <a href="{{route('partner.edit',['partner'=>$partner->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('partner.destroy',['partner'=>$partner->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$partners->links()}}
</div>
@endsection
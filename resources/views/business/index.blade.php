@extends('layouts.app')
@section("content")
<div class="container">
<style>
    svg{width:50px;}
</style>
<h3> Danh sách cửa hàng</h3>
<a href="{{route('business.create')}}"><button>Thêm cửa hàng</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>bank_information</th>
    <th>Số điện thoại</th>
    <th>email</th>
    <th>Website</th>
    <th>Trang</th>
    <th>Ghi chú</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($businesss as $business)
</tr>
<td>{{$business->id}}</td>
<td>{{$business->name}}</td>
<td>{{$business->bank_information}}</td>
<td>{{$business->phone}}</td>
<td>{{$business->email}}</td>
<td>{{$business->website}}</td>
<td>{{$business->fanpage}}</td>
<td>{{$business->description}}</td>
<td>
    <a href="{{route('business.edit',['business'=>$business->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('business.destroy',['business'=>$business->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$businesss->links()}}
</div>
@endsection
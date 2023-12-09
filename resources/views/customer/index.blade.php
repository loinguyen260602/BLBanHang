@extends('layouts.app')
@section("content")
<div class="container">
<style>
    svg{width:50px;}
</style>
<h3> Danh sách khách hàng</h3>
<a href="{{route('customer.create')}}"><button>Thêm khách hàng</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Giới tính</th>
    <th>Ngày sinh</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>email</th>
    <th>Ghi chú</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($customers as $customer)
</tr>
<td>{{$customer->id}}</td>
<td>{{$customer->fullname}}</td>
<td>{{$customer->sex}}</td>
<td>{{$customer->DOB}}</td>
<td>{{$customer->adress}}</td>
<td>{{$customer->phone}}</td>
<td>{{$customer->email}}</td>
<td>{{$customer->description}}</td>
<td>
    <a href="{{route('customer.edit',['customer'=>$customer->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('customer.destroy',['customer'=>$customer->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$customers->links()}}
</div>
@endsection
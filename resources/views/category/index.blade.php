@extends('layouts.app')
@section("content")
<style>
    svg{width:50px;}
</style>
<div class="container">
<h3> Danh sách loại sản phẩm</h3>
<a href="{{route('category.create')}}"><button>Thêm loại sản phẩm</button></a>

<table class="table table-bordered">


<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Nhà sản xuất</th>
    <th>feature</th>
    <th>Ghi chú</th>
    
    <th>Thao tác</th>
</tr>
  @foreach($categories as $category)
</tr>
<td>{{$category->id}}</td>
<td>{{$category->name}}</td>
<td>{{$category->parent_id}}</td>
<td>{{$category->feature}}</td>
<td>{{$category->description}}</td>
<td>
    <a href="{{route('category.edit',['category'=>$category->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('category.destroy',['category'=>$category->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$categories->links()}}
</div>
@endsection
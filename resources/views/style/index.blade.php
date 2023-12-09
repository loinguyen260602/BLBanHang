@extends('layouts.app')
@section("content")
<div class="container">
<h3> Danh sách kiểu sản phẩm</h3>
<a href="{{route('style.create')}}"><button>Thêm kiểu sản phẩm</button></a>

<table class="table table-bordered">

<tr>
    <th>Mã</th>
    <th>Tên</th>
    <th>Ghi chú</th>
    <th>Thao tác</th>
</tr>
  @foreach($styles as $style)
</tr>
<td>{{$style->id}}</td>
<td>{{$style->name}}</td>
<td>{{$style->description}}</td>
<td>
    <a href="{{route('style.edit',['style'=>$style->id])}}">
        <button>Edit</button>
    </a>
    <form action="{{route('style.destroy',['style'=>$style->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="Delete" onclick=" return confirm('Bạn có thực sự muốn xoá?')">
    </form>
</td>


</tr>
@endforeach
</table>
{{$styles->links()}}
</div>
@endsection
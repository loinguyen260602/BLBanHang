@extends('layouts.app')
@section("content")
<style>
    svg{width:50px;}
</style>
<div class="container">
<h3> {{__('product.index.title')}}</h3>
<a href="{{route('product.create')}}"><button>{{__('product.index.button.add')}}</button></a>

<table class="table table-bordered table-striped">

<tr>
    <th>{{__('product.index.id')}}</th>
    <th>{{__('product.index.name')}}</th>
    <th>{{__('product.index.photo')}}</th>
    <th>{{__('product.index.category')}}</th>
    <th>{{__('product.index.style')}}</th>
    <th>{{__('product.index.size')}}</th>
    <th>{{__('product.index.weight')}}</th>
    <th>{{__('product.index.price')}}</th>
    <th>{{__('product.index.old_price')}}</th>
    <th>{{__('product.index.partner')}}</th>
    <th>{{__('product.index.description')}}</th>
    <th>{{__('product.index.action')}}</th>
</tr>


  @foreach($products as $product)
<tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td><div style="height:50px; overflow-y:scroll;">
    <?php
  //  use File;
     $dir=public_path('uploads')."/products/".$product->id;
     //Xoa thu muc cu
     if(File::exists($dir)){

        foreach(File::files($dir) as $file)
        {
        ?>
        <img src="/uploads/products/{{$product->id}}/{{basename($file->getPathname())}}" width="50">
        <?php
        }
     }
    ?>
</div></td>
<td>{{$product->category_id}}</td>
<td>{{$product->style_id}}</td>
<td>{{$product->size}}</td>
<td>{{$product->weight}}</td>
<td>{{$product->price}}</td>
<td>{{$product->old_price}}</td>
<td>{{$product->partner_id}}</td>
<td>{{$product->description}}</td>
<td>
    <a href="{{route('product.edit',['product'=>$product->id])}}">
        <button>{{__('product.index.button.edit')}}</button>
    </a>
    <form action="{{route('product.destroy',['product'=>$product->id])}}" method="POST">
    @method('delete')
    @csrf
    <input type="submit" value="{{__('product.index.button.delete')}}" onclick=" return confirm('Ban co thuc su muon xoa?')">
    </form>
</td>
</tr>
@endforeach
</table>

{{$products->links()}}
</div>
@endsection
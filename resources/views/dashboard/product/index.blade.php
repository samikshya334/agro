@extends('dashboard.layouts.app')

@section('content')
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Product Name</th>
            <th>Category Name</th>
            <th>Price</th>
            <th>Extra Details</th>
            <th>Image</th>
            <th>Action</th>


        </tr>
    </thead>
    <tbody>
        @foreach($products as $key=>$product)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$product->name}}</td>
            <td>
                @if($product->category_id)
                {{$product->category->name}}
                @endif
            </td>
            <td>{{$product->price}}</td>
            <td><button><a href="{{route('product.extraDetails',$product->id)}}">Add</a></button></td>
            <td><img style="height:80px;width:80px;" src="{{asset('uploads/'.$product->image)}}"></td>
             <td>
                <a href="{{route('product.edit',$product->id)}}" style="font-size:17px; padding:50px;"><i class="fa fa-edit"></i></a>
                <form method="POST" action="{{route('product.delete',$product->id)}}">
                    @csrf
                    <button>
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
             </td>



        </tr>
        @endforeach

    </tbody>
</table>
@endsection


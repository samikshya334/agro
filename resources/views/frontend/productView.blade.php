@extends('frontend.layouts.base')

@section('content')
<div class="shop-detail-box-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-6">
                <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('uploads/'.$product->image)}}" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="single-product-details">
                    @if($product->ProductDetail)
                        <h2>{{$product->ProductDetail->title}}</h2>
                        <h5><del>$ 60.00</del>{{$product->price}}</h5>
                        <p class="available-stock"><span>More than 20 available / <a href="#">8 sold</a></span></p>
                        <h4>Short Description:</h4>
                        <p>{{$product->ProductDetail->description}}</p>
                       <form method="post" action="{{route('cart.store')}}">
                        @csrf
                        <ul>
                            <li>
                                <div class="form-group quantity-box">
                                    <h3>Quantity</h3>
                                    <input  type="number"class="form-control" name="qty"  placeholder="Qty." type="number">
                                    <input type="hidden" value="{{$product->id}}" name="product_id" readonly>
                                </div>
                            </li>
                        </ul>

                        @if(Auth::user())
                        <button type="submit" class="btn btn-primary btn-sm pull-left">
                            Add to cart <i class="icon-shooping-cart"></i></button>
                        @else
                        <button type="submit" class="btn btn-primary btn-sm"><a href="{{route('login')}}"
                           >Add to cart <i class="icon-shooping-cart"></i></a></button>
                            @endif


                    @endif
<h2>Related Product</h2>
                    <div class="add-to-btn">
                        {{-- <div class="add-comp">
                            <a class="btn hvr-hover" href=""><i class="fas fa-sync-alt"></i> Related Product</a>
                        </div> --}}
                        <div class="row special-list">
                            @isset($related_products)
                                @foreach($related_products as $related_product)
                                    <div class="col-lg-3 col-md-6 special-grid top-featured">
                                        <div class="products-single fix">
                                            <div class="box-img-hover">
                                                <div class="type-lb">

                                                </div>
                                                <a href="#"><img src="{{asset('uploads/'.$related_product->image)}}" class="img-fluid" alt="Image"></a>
                                                <div class="mask-icon">

                                                        <li><a href="{{asset('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye sm"></i></a></li>

                                                    <a class="cart" href="{{route('cart')}}">Add to Cart</a>
                                                </div>
                                            </div>
                                            <div class="why-text ">
                                                <h4>{{$related_product->name}}</h4>
                                                <h4><a href="#"></a><span>{{$related_product->price}}</span></h4>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

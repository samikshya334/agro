@extends('frontend.layouts.base')
@section('content')
<div id="slides-shop" class="cover-slides">
    <ul class="slides-container">
        <li class="text-center">
            <img src="images/banner-01.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Freah shop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/banner-02.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-center">
            <img src="images/banner-03.jpg" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> Freshoshp</strong></h1>
                        <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                        <p><a class="btn hvr-hover" href="#">Shop New</a></p>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    <div class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
    </div>
</div>

 <!-- Start Categories  -->
 <div class="categories-shop">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/categories_img_01.jpg" alt=""/>
                    <a class="btn hvr-hover" href="#">Fruits And Vegetables</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/categories_img_02.jpg" alt=""  />
                    <a class="btn hvr-hover" href="#">Fruits And Vegetables</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="shop-cat-box">
                    <img class="img-fluid" src="images/categories_img_03.jpg" alt="" />
                    <a class="btn hvr-hover" href="#">Fruits And Vegetables</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Categories -->

<div class="box-add-products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="images/add-img-01.jpg" alt="" />
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="offer-box-products">
                    <img class="img-fluid" src="images/add-img-02.jpg" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Start  sale Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>BAMPAR SALES</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">All</button>
                        <button data-filter=".top-featured">Top featured</button>
                        <button data-filter=".best-seller">Best seller</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">
            @isset($products)
            @foreach($products as $value)
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <a href="{{route('productView',$value->id)}}"><img src="{{asset('uploads/.$value->image')}}" class="img-fluid" alt="Image"></a>
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{asset('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                {{-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li> --}}
                                <li><a href="{{route('cart.store')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>

                            <a class="cart" href="{{route('cart')}}" >Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>{{$value->name}}</h4>
                        <h4><a href="{{asset('productView')}}"></a><span>{{$value->price}}</span><h4>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
    </div>
</div>
<!-- End  sale Products  -->


<!-- Start  Products  -->
<div class="products-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>Latest-</h1>

                </div>
            </div>
        </div>

        <div class="row special-list">
            @isset($new_products)
            @foreach($new_products as $new_product)
            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="new">New</p>
                        </div>
                        <a href="{{asset('productView')}}"><img src="{{asset('uploads/.$new_product->image')}}" class="img-fluid" alt="Image"></a>
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{asset('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="{{route('cart.store')}}">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>{{$new_product->name}}</h4>
                        <h4><a href="{{asset('productView')}}"></a><span>{{$new_product->price}}</span><h4>
                </div>
            </div>
            @endforeach
            @endisset

        </div>
    </div>
</div>
<!-- End Products  -->


<div class="latest-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-all text-center">
                    <h1>latest blog</h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="images/blog-img.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="images/blog-img-01.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="blog-box">
                    <div class="blog-img">
                        <img class="img-fluid" src="images/blog-img-02.jpg" alt="" />
                    </div>
                    <div class="blog-content">
                        <div class="title-blog">
                            <h3>Fusce in augue non nisi fringilla</h3>
                            <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                        </div>
                        <ul class="option-blog">
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="fas fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-comments"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- End Main Top -->

<!-- Start Top Search -->
{{-- <div class="top-search">
    <div class="container">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-search"></i></span>
            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
        </div>
    </div>
</div> --}}
<!-- End Top Search -->


{{-- <div class="row special-list">
    <div class="col-lg-3 col-md-6 special-grid top-featured">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    <p class="new">New</p>
                </div>
                <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                <div class="mask-icon">
                    <ul>
                        <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                        <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                    <a class="cart" href="#">Add to Cart</a>
                </div>
            </div>
            <div class="why-text">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h5> 550rs</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 special-grid top-featured">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    <p class="new">New</p>
                </div>
                <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                <div class="mask-icon">
                    <ul>
                        <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                        <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                    <a class="cart" href="#">Add to Cart</a>
                </div>
            </div>
            <div class="why-text">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h5> 700rs</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 special-grid top-featured">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    <p class="new">New</p>
                </div>
                <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                <div class="mask-icon">
                    <ul>
                        <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                        <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                    <a class="cart" href="#">Add to Cart</a>
                </div>
            </div>
            <div class="why-text">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h5> 200rs</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 special-grid top-featured">
        <div class="products-single fix">
            <div class="box-img-hover">
                <div class="type-lb">
                    <p class="new">New</p>
                </div>
                <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                <div class="mask-icon">
                    <ul>
                        <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                        <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                    </ul>
                    <a class="cart" href="#">Add to Cart</a>
                </div>
            </div>
            <div class="why-text">
                <h4>Lorem ipsum dolor sit amet</h4>
                <h5> 1000rs</h5>
            </div>
        </div>
    </div>
</div> --}}
{{--  <div class="row special-list">
            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="{{route('cart')}}" >Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> 500rs</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> 600rs</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> 400rs</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 special-grid best-seller">
                <div class="products-single fix">
                    <div class="box-img-hover">
                        <div class="type-lb">
                            <p class="sale">Sale</p>
                        </div>
                        <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                        <div class="mask-icon">
                            <ul>
                                <li><a href="{{route('productView')}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                <li><a href="{{route('cart')}}" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                            </ul>
                            <a class="cart" href="#">Add to Cart</a>
                        </div>
                    </div>
                    <div class="why-text">
                        <h4>Lorem ipsum dolor sit amet</h4>
                        <h5> 300rs</h5>
                    </div>
                </div>
            </div>
        </div> --}}

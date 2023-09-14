@extends('frontend.layouts.base')

@section('content')

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Select</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $sum=0;@endphp
                            @foreach($carts as $cart)
                            @php $sum=$sum + $cart->product->price; @endphp
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                <img class="img-fluid" src="{{asset('uploads/'.$cart->product->image)}}" alt="" />
                            </a>
                                </td>
                                <td class="name-pr">
                                    <a href="{{$cart->product->name}}">
                                Lorem ipsum dolor sit amet
                            </a>
                                </td>
                                <td class="price-pr">
                                    <p>${{$cart->product->price}}</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="{{$cart->qty}}" min="0" step="1" class="c-input-text qty text"></td>
                                <td><input type="checkbox" name="select_product[]" cart-id="{{$cart->id}}"></td>


                                 <td class="remove-pr">
                                    {{-- <a class="btn-close"  data-id="{{$cart->id}}" href="#"> --}}

                                <td class="remove-pr">
                                    <form method="POST" action="{{route('cart.delete',$cart->id)}}">
                                        @csrf

                                        @method('DELETE')
                                        <button type="submit" class="btn-close"><i class="fas fa-times"></i></button>

                                    </form>
                                 </td>
                            </a>
                                </td>
                             </tr>
                             @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href ="{{route('index')}}" class="btn btn-primary btn-sm"><i class="icon-arrow-left"></i>Continue Shopping</a>


        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">

                    <div class="d-flex gr-total">
                        <h5>Grand Total</h5>
                        <div class="ml-auto h5">${{$sum}}</div>
                    </div>
                    <br>
                    <div class="col-12 d-flex shopping-box">
                        <td class="label label-important ">
                            <form method="POST" action="{{route('product.booking')}}">
                                @csrf

                                @method('POST')
                                <button type="submit" class="ml-auto btn hvr-hover"></button>

                            </form>
                         </td>
                        <div class="  label label-important ml-auto btn hvr-hover "><strong class=" buy_product">Buy</strong> </div></div>

                    <hr> </div>


            </div>

            {{-- <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div> --}}
        </div>

    </div>
</div>
@endsection
 @push('footer-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.buy_product').on('click', function() {
            var cart_id = [];
            $('input[name="select_product[]"]:checkbox:checked').each(function(i) {
                cart_id[i] = $(this).attr('cart-id');
            });
            if (cart_id.length == 0) {
                alert('Please select at least one product.');
            } else {
                $.ajax({
                    url: '{{route("product.booking")}}',
                    type: 'post',
                    data: {
                        cart_id: cart_id,
                        _token: '{{csrf_token()}}'
                    },
                    success: function(data) {
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>


@endpush

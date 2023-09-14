<?php

namespace App\Http\Controllers\FrontEnd;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

 class FrontEndController extends Controller
{
    public function index()
    {
        $products=Product::all();
        $new_products=Product::limit(4)->latest()->get();
        return view('frontend.welcome',compact('products','new_products'));
    }


    public function cart()
    {
        $carts=[];


        if(Auth::user())
        {
            $user_id = Auth::user()->id;
            $carts=Cart::where('user_id',$user_id)->get();
        }
        // dd($carts);
        return view('frontend.cart
        ' ,compact('carts'));

    }


    public function productView(Request $request)
{
        $id = $request->id;
        $product = Product::where('id',$id)->with('ProductDetail')->first();
        $category_id=$product->category_id;
        $related_products=Product::where('category_id',$category_id)->get();
        return view('frontend.productView',compact('product','related_products'));
        // return view('frontend.cart', [
        //     'product' => $product,
        //     'relatedProducts' => $relatedProducts,
        // ]);


    }



}

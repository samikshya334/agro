<?php

namespace App\Http\Controllers;

use App\Models\ProductBooking;
use Illuminate\Http\Request;
use App\Models\Cart;


class ProductBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking_products=ProductBooking::get();
        return view('dashboard.bookedProducts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart_id=$request->cart_id;
        if ($cart_id === null || empty($cart_id)) {
            return redirect()->back()->with('error', 'No cart items selected.');
        }
        $data = array();
       foreach ($cart_id as $id => $value) {
        $cart = Cart::find($value);
        $data[] = [
            'product_id' => $cart->product_id,
            'user_id' => $cart->user_id,
            'qty' => $cart->qty,
            'payment_status' => '0'
        ];
}
        $ProductBooking=ProductBooking::insert($data);
        if($ProductBooking)
        {
            Cart::destroy($cart_id);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductBooking $productBooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductBooking $productBooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductBooking $productBooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductBooking $productBooking)
    {
        //
    }
}

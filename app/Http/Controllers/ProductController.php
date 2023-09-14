<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();
        return view ('dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::whereNotNull('category_id')->get();
        return view('dashboard.product.add',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'category_id' => 'required',
        'price' => 'required|numeric', // Assuming the price is a numeric value
        'image' => 'required|image|max:2048',
    ]);

    $data = [
        'name' => $request->name,
        'category_id' => $request->category_id,
        'price' => $request->price,
    ];

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $fileName);
        $data['image'] = $fileName;
    }

    $create = Product::create($data);

    return redirect()->route('product.create');
}


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Product $product)
    {
        $id=$request->id;
        $product = Product::findOrFail($id);
        $categories= Category::whereNotNull('category_id')->get();
        return view ('dashboard.product.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $id=$request->id;
        $data=array(
            'name'=>$request->name,
            'category_id'=> $request -> category_id ,
            'price'=>$request->price,
        );
        if($request->hasFile('image'))
        {
            $image=$request->file('image');
            $fileName=date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/uploads"),$fileName);
            $data['image']=$fileName;
        }
       $create=Product::where('id',$id)->update($data);
        return redirect()->route('product.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
        return back();
    }
    public function extraDetails(Request $request )
    {

        $id=$request->id;
        $product=Product::where('id',$id)->with('ProductDetail')->first();
        return view ('dashboard.product.extraDetails',compact('id','product'));


    }
    public function extraDetailsStore(Request $request )
    {


            $request->validate([
            'title' => 'required',
            'total_items' => 'required',
            'description' => 'required',
            // Add other validation rules for your fields
        ]);

        $id = $request->id;
        $data =array (
            'product_id' => $id,
            'title' => $request->title,
            'total_items' => $request->total_items,
            'description' => $request->description
        );

        $details = ProductDetail::updateOrCreate(
            ['product_id' => $id],
            $data
        );
        return redirect()->route('product.list');


    }




}


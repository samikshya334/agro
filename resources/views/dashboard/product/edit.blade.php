@extends('dashboard.layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Product Manager</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br>
               <form id="demo-form2" action="{{route('product.update',$product->id)}}" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3 mt-3">
                    <label  class=" col-md-12" for=
                    'first-name'>Category <span class="required"></span></label>
                    <div class="col-md-12">
                        <select  name="category_id" class="form-control col-md-7 col-xs-12" required="">
                            <option value="">Category Name</option>
                            @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}"
                                @if($product->category_id==$categorie->id) selected @endif>{{$categorie->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-floating mb-3 mt-3">
                        <label  class=" col-md-12" for=
                        'first-name'>Product Name <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="text" name="name" value="{{$product->name}}" class="forn-control col-md-7 col-xs-12 "required="">
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label  class=" col-md-12" for=
                        'first-name'>Product Price <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="number" name="price" value="{{$product->price}}" class="forn-control col-md-7 col-xs-12 "required="">
                        </div>
                    </div>
                    <div class="form-floating mb-3 mt-3">
                        <label  class=" col-md-12" for=
                        'first-name'>Image <span class="required">*</span></label>
                        <div class="col-md-12">
                            <input type="file" name="image" class="forn-control col-md-7 col-xs-12 "required="" accept="image/*" max-size="2097152">
                            <small class="text-muted">Maximum file size: 2MB</small>
                        </div>
                        </div>
                        <div class="from-group">
                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <img style="height:80px;width:80px;"src="{{asset
                                ('uploads/'.$product->image)}}">

                    </div>

                    <div class="In-solid">
                        <div class="form-floating mb-3 mt-3">
                            <div class="container-fluid">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button type="submit" class="btn btn-primary" value="Submit">Submit </button>


                        </div>
                            </div>
                        </div>
                    </div>
                    </form>
</div>
        </div></div></div>
@endsection


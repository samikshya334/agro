@extends('dashboard.layouts.app')

@section('content')

<form  method="POST" action="{{route('category.update',$category->id)}}">
@csrf
    <div class="form-floating mb-3 mt-3">
      <label  class=" col-md-12">Category <span class="required"></label>
        <div class="col-md-12">
            <input type="text" id="first-name"  value="{{$category->name}}"name="name"  class="form-control col-md-7 col-xs-12">
    </div>
</div>
<div class="form-floating mb-3 mt-3">
        <label  class=" col-md-12 "> Sub-Category <span class="required"></label></span>
          <div class=" col-md-12">
              <select  name="category_id" class="form-control col-md-7 col-xs-12">
                <option value=""@if($category->category_id==null) selected @endif>NO Subcategory</option>
                @foreach($categories as $categorie)
                <option value="{{$categorie->id}}"@if($category->category_id!= null && $category->category_id==$categorie->id)selected
                 @endif>{{$categorie->name}}</option>
                 @endforeach
            </select>
            </div>
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

@endsection

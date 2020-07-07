@extends('layouts.app')

@section("content")
  <div class="card w-100 p-5">
    <form method="post" action="/update/{{$product->id}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="title" class="col-sm-3 col-form-label">Product Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control"  placeholder="Product Title" value="{{$product->title}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="desc" class="col-sm-3 col-form-label">Product details</label>
            <div class="col-sm-9">
                <input name="desc" type="text" class="form-control"
                       placeholder="Product details">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-3 col-form-label">Price</label>
            <div class="col-sm-9">
                <input name="price" type="text" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label">Product Image</label>
            <div class="col-sm-9">
                <input name="image" type="file" >
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Save Product</button>
            </div>
        </div>
    </form>
  </div>
@endsection

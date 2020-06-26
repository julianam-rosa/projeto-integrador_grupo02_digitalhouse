@extends('layouts.app')

@section('content')
<div class="card p-0 shadow-sm m-2 " >
    <div class="row">
        <div class="col-sm-7">  <img class="card-img-top" height="500px"  src="{{ asset('image/' . ($product->image)) }}" alt="Card image cap" >
    </div>
    <div class="col-sm">
      <div class="card-body h-100">
          <h4 class="card-title mt-5"><b> Price: ${{$product->price}}</b></h5><hr>
          <div class="mt-2 "><b>Seller Information</b></div>
        <div class="row m-0">
          <img class="rounded-circle mr-2" src="{{ asset('image/' . ($product->seller->avatar)) }}" width="50px" height="50px"/>
          <div>
            <h4 class="m-0">{{$product->seller->name}}</h4>
            <div>{{$product->seller->address}}</div>
          </div>
        </div>
        <div class="my-4">
          @guest
          <div class="mt-2 "><b>Contact details <a href="/login">[Login to view]</a></b></div>
          <div class="m-0 p-0">Phone: xxxxxxxxxx</div>
          <div class="m-0 p-0">Email: xxxxxx@xxxxx.xxx</div>
          @else
          <div class="mt-2 "><b>Contact details</b></div>
          <div class="m-0 p-0">Phone: {{$product->seller->phone}}</div>
          <div class="m-0 p-0">Email: {{$product->seller->email}}</div>
          @endguest
        </div>
        <div class="mb-4">
          <b>Safety Tips for Buyers</b><br>
          Meet seller at a safe location<br>
          Check the item before you buy<br>
          Pay only after collecting item<br>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card m-2 w-100  bg-white shadow-sm" >
  <div class="card-body">
    <h5 class="card-title"><b>{{$product->title}}</b></h5>

    {{$product->description}}
  </div>
</div>
@endsection

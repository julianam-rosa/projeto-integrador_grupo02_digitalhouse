@extends('layouts.app')

@section('content')


            @foreach($products as $p)
            <div class="card m-2 shadow-sm" style="width: 17rem;">
              <img class="card-img-top" src="{{ asset('image/' . ($p->image)) }}" alt="Card image cap" height="200px">
              <div class="card-body" >
                <h5 class="card-title">{{$p->title}}</h5>
                <p class="card-text" style="height: 3em; line-height: 1.5em; overflow: hidden;">{{$p->description}}</p>

              </div>
               <div class="card-footer d-flex">
                  <div class="w-50"><b>${{$p->price}}</b></div>
                  <div class="w-50 text-right">
                  <a href="/details/{{$p->id}}" class=" link-primary ">View details</a>
                  </div>
                </div>
            </div>
            @endforeach


@endsection

@extends('layout.main')
@section('content')



<!-- <div class="card"> -->
    <div class="containers">
      <div class="side-items">
      <div class="img-auth">
        <img src="{{asset($closet->image)}}" alt="Image" width="20%" height="25%">
      </div>
      <div class="heading">
        <h3>{{$closet->name}} </h3>
        <div class="cart">
          <i class="fas fa-shopping-cart"> </i>
        </div>
        </div>
        <div class="sub-title">
          <p>{{$closet->model}}</p>
          <p>{{$closet->price}} </p>
          <p>{{$closet->description}} </p>
          </div>
          </div>
      
      </div>
    <!-- </div> -->
   
  </div>

@endsection
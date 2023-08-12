@extends('user.layout.main')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">



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
@extends('user.layout.main')
@section('content')




<div class="gallery">
  @foreach($closets as $closet)
  <div class="card">
    <div class="container">
      <div class="img-auth">
        <img src="{{asset($closet->image)}}" alt="Image" width="50">
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
          <button class="btn-show"><a href="/description/{{$closet->id}}"> Show more </a> </button>
        </div>
      
    </div>
  </div>
  @endforeach
</div>





@endsection
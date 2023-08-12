@extends('user.layout.main')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<section id="home">
    <div class="container-fluid px-0 top-banner">
        <div class="container">
           <div class="row">
            <div class="col-lg-5 col-md-6">

                <h1>
                    Good outfit choices are good investments.
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, consequatur.</p>
                <div class="mt-4">
                    <button class="main-btn">Order now <i class="fas fa-shopping-basket ps-3" ></i> </button> 
                    <button class="white-btn ms-lg mt-lg-0 mt-4">Order now <i class="fas fa-angle-right ps-3" ></i> </button>
                </div>
            </div>
           </div> 
        </div>
    </div>
</section>



<div class="heading-2">
    <h2>You Can Order Your Favourite Items</h2>
</div>

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
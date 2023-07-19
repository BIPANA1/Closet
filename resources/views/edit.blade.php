@extends('layout.main')
@section('content')

@if(session('message'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            alert("{{ session('message') }}");
        });
    </script>
@endif


<form class="form-edit" action="/edit-blog/{{$closet->id}}" method="post" enctype="multipart/form-data" >
@csrf
    <div>
        <h5>Update New Product</h5>
    <label>Product name</label>
    <input type="text" name="name" value="{{$closet->name}}">
    </div>
    <div>
    <label>Brand</label>
    <input type="text" name="brand" value="{{$closet->brand}}">
    </div>
    <label>Description</label>
    <input type="text" name="description"  value="{{$closet->description}}">
    </div>
    <div>
    <label>Price</label>
    <input type="text" name="price"  value="{{$closet->price}}">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <input type="submit" name="post">
    </div>
</form>







@endsection 
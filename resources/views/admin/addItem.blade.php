@extends(' admin.layout.main')
@section('content')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

@if(session('message'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            alert("{{ session('message') }}");
        });
    </script>
@endif

<form class="form-items" action="/create-closet" method="post" enctype="multipart/form-data" >
@csrf
    <div>
        <h5>Add New Product</h5>
    <label>Product name</label>
    <input type="text" name="name">
    </div>
    <div>
    <label>Brand</label>
    <input type="text" name="brand">
    </div>
    <label>Description</label>
    <input type="text" name="description">
    </div>
    <div>
    <label>Price</label>
    <input type="text" name="price">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <input type="submit" name="post">
    </div>
</form>
















@endsection 
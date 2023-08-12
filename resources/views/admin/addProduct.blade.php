@extends('admin.layout.main')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
    .pagination {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        justify-content: center;
    }

    .pagination li {
        margin: 0 3px;
    }

    .pagination li a {
       
        font-size: 14px;
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 4px;
        color: #333;
        text-decoration: none;
    }

    .pagination li.active a {
        background-color: #007bff;
        color: #fff;
        border-color: #007bff;
    }
</style>

<!-- Place this code where you want the pop-up alert to appear -->
@if(session('message'))
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        alert("{{ session('message') }}");
    });
</script>
@endif

<!-- <button class="add-btn"><a href="/addItem"> Add product </a> </button> -->

<table>
    <tr>
        <th>Name</th>
        <th>Brand</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($closets as $closet)
    <tr>
        <td>{{$closet->name}}</td>
        <td>{{$closet->brand}}</td>
        <td>{{$closet->description}}</td>
        <td>{{$closet->price}}</td>
        <td>
            <img src="{{asset($closet->image)}}" alt="Image" width="50" height="40">
        </td>
        <td>
            <div class="btn-0">
                <button class="btn-1"><a href="/edit/{{$closet->id}}"> Edit </a></button>
                <button class="btn-2"><a href="/delete-closet/{{$closet->id}}">Delete</a></button>
            </div>
        </td>
    </tr>
    @endforeach
</table>

<br><br>
<div class="row">
    <ul class="pagination">
        {{ $closets->links() }}
    </ul>
</div>

@endsection

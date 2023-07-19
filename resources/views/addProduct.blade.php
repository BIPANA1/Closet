@extends('layout.main')
@section('content')

<!-- Place this code where you want the pop-up alert to appear -->
@if(session('message'))
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            alert("{{ session('message') }}");
        });
    </script>
@endif




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
        <button class="btn-2"><a href="/delete-closet/{{$closet->id}}">Delete</button>
        </div>
    </td>
    @endforeach
</tr>
</table>

<button class="add-btn"><a href="/addItem"> Add product </a> </button>



















@endsection
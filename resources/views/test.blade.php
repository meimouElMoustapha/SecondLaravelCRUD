@extends('layouts.app')
@section('title')
test
@endsection('title')
@section('content')
<br>

<br><br>
    <h2 class="">Posts List</h2><br>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a class="btn btn-primary" href="{{ url('posts/show') }}">Create post</a>
    <br>
    <br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>title </th>
       
        <th>image</th>
    </tr>

    @foreach ($data_name as $info )
   
    <tr>
        <td>{{ $info->id }} </td>
        <td>{{ $info->title }} </td>
       
        <td><img src="{{ asset('uploads/appsetting/' . $info->image) }}" height="100px" width="100px"/></td>
        {{-- {{ asset('public/storage/image/'.$info->image) }} --}}
    </tr>
    @endforeach

  


</table>





@endsection
@extends('layouts.app')
@section('title')
detail page
@endsection('title')
@section('content')


<br><br>
<a href="./." class="btn btn-primary" >Go back</a><br><br>

<h4> {{ $product->title }}</h4>

<p>{{ $product->body }}</p>


<td><img src="{{ asset('uploads/appsetting/' . $product->image) }}" height="300px" width="300px"/></td>
<br><br>
<a href="{{ url('posts/edit', [$product->id]) }}" class="btn btn-primary">edit</a>
<a href="{{ url('posts/destroy',[$product->id])}}" class="btn btn-danger">delete</a>



    






@endsection
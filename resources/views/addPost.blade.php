@extends('layouts.app')
@section('title')
Add post
@endsection('title')
@section('content')

<br>
<div class="container">
<br><br>
<div>
  
<div class="row">
    <h2>Add posts</h2>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
      </div>
      @endif
{{-- //{{ Form::open(array('url' => 'foo/bar')) }} --}}
{!! Form::open(['url' => 'posts/store' ,'file'=>'true','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
@if (session()->has('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
      
{{  Form::label('text', 'Type text ');}}

{{  Form::text('title','', array('class'=>'form-control'));}}

{{-- //Input::old('name'),, --}}

{{  Form::label('body', 'Type text ');}}

{{ Form::textarea('body',null,array('class'=>'form-control'));}}
<br>
{{  Form::label('file', null);}}

{{ Form::file('image',$post->image,null,array('class'=>'form-control'));}}
<br><br>
{{ Form::Submit('Create Post',array('class'=>'btn btn-primary'));}}










      {{ Form::close() }}


</div>


</div>


@endsection 
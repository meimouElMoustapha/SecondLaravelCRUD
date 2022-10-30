@extends('layouts.app')

@section('content')
<br>
<div class="container">
<br><br><br>
    <h3>Create post</h3>
<hr>





{{-- {!!Form::open(array('route' => 'posts.store', 'enctype' => 'multipart/form-data')) !!} --}}


{{-- the correct form open bellow --}}
{{-- {!! Form::open(['url' => 'posts/store' ,'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
{!! Form::token() !!}

@csrf
{!! Form::label('Title', 'Title') !!}
{!! Form::text('Title',null,array('class'=>'form-control')) !!}
<br>
{!! Form::label('Body', 'Write content') !!}

{!! Form::textarea('Body',null,array('class'=>'form-control')) !!}
<br>
{{-- {!! Form::label('Image') !!}


{!! Form::file('Image') !!} --}}
<br><br>
{{-- {!! Form::submit('Create Post',array('class'=>'btn btn-primary'))!!}


{!! Form::close() !!}
     --}}


     @if ($errors->any())
     <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
           @endforeach
       </ul>
     </div><br />
   @endif
     <form method="post" action="{{ route('store') }}">
         @csrf
         <div class="form-group">    
             <label for="stock_name">Stock Name:*</label>
             <input type="text" class="form-control" name="title" value="{{ old('title') }}"/>
         </div>

         {{-- <div class="form-group">
             <label for="ticket">Stock Ticket:*</label>
             <input type="text" class="form-control" name="ticket"/>
         </div> --}}
<br>
<label for="stock_name">text:*</label>
         <textarea class="form-control"  value="{{ old('body') }}">

         </textarea>
         <br><br>
         <input type="file" name="image"  value="{{ old('image') }}"/>
         <button type="submit" class="btn btn-primary">Add Stock</button>
     </form>



</div>



@endsection
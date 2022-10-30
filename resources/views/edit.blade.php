@extends('layouts.app')


@section('title')

<p>edit post</p>

@endsection 
@section('content')
< class="container">
    <br><br>
    <h1>this is edit </h1>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div><br />
  @endif
    <form method="POST" action="/posts/update/{{$posttest->id}}" enctype="multipart/form-data">
      

      {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="form-group">    
            <label for="stock_name">Stock Name:*</label>
            <input type="text" class="form-control" it="title" name="title" value="{{$posttest->title}}" />
        </div>

        {{-- <div class="form-group">
            <label for="ticket">Stock Ticket:*</label>
            <input type="text" class="form-control" name="ticket"/>
        </div> --}}
<br>
<label for="stock_name">text:*</label>
        <textarea class="form-control" name="body"  id="body" rows="5" cols="100" >
          {{ ucfirst($posttest->body) }}
        </textarea>
        <br><br>
<input type="file" name="image" id="image"  value="{{ $posttest->image }}"/>

<br><br>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('posts/show/'. $posttest->id) }}" class="btn btn-primary">back</a>
    </form>






</div>






@endsection 
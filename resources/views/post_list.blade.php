@extends('layouts.app')
@section('title')
test
@endsection('title')
@section('content')

<br>
<div class="container">
<br><br>
<div>
    <a href="{{ url('Add_Student') }}" class="btn btn-primary">Create</a>
   <br><br>
</div>
<br>


    
@foreach ($Test_post as $t )
<div class="row">
<div class="col-lg-6 mb-4">

<div class="card" style="width: 18rem;">
  <td><img src="{{ asset('uploads/appsetting/' . $t->image) }}" height="100px" width="100px"/></td>
  <div class="card-body">
      <h5 class="card-title">{{ $t->id }} </h5>
      <p class="card-text">{{ $t->title }} </p>
 
      <a href="{{ url('posts/show', [$t->id]) }}" class="btn btn-primary">More Info</a>
    </div>
</div>
</div>


       
        {{-- {{ url('projects/projectDetails', [$pro->id]) }} --}}
        
        {{-- {{ URL::to("post/show/{$t->id}") }} --}}
  
</div>

@endforeach






</div>


@endsection 
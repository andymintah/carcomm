@extends('layouts.app')

@section('content')

<hr class="featurette-divider">
@foreach($blogPosts as $blogPost)
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">{{$blogPost->title}}</h2>
    <p class="lead">{{$blogPost->body}}</p>
    <a class="btn btn-secondary" href='/blog/{{$blogPost->id}}'>Read More</a>
  </div>
  <div class="col-md-5">
  </div>
</div>
@endforeach




@endsection
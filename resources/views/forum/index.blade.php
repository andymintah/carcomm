@extends('layouts.app')

@section('content')

<hr class="featurette-divider">
@foreach($forumPosts as $forumPost)
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">{{$forumPost->title}}</h2>
    <p class="lead">{{$forumPost->body}}</p>
    <a class="btn btn-secondary" href='/forum/{{$forumPost->id}}'>Read More</a>
  </div>
  <div class="col-md-5">
  </div>
</div>
@endforeach




@endsection
@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
<div class="jumbotron">
<div class="container">
  <h1 class="display-3">{{$forumPost->title }}</h1>
  <p>{{$forumPost->body}}</p>
</div>
</div>


<div class="col-md-3 col-lg-3 col-sm-3 pull-right">


</div>


@endsection
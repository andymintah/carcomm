@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
<div class="jumbotron">
<div class="container">
  <h1 class="display-3">{{$company->name }}</h1>
  <p>{{$company->description}}</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">More</a></p>
</div>
</div>

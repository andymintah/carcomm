@extends('layouts.app')

@section('content')

<hr class="featurette-divider">
@foreach($companies as $company)
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading">{{$company->name}}</h2>
    <p class="lead">{{$company->description}}</p>
    <a class="btn btn-primary" href='/companies/{{$company->id}}'>More</a>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
  </div>
</div>
@endforeach




@endsection


@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post" 
  action="{{ route('company.store') }}"
  enctyoe="multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="post">
  
  <div class="form-group">
    <label for="company-name">Name</label>
    <input
    class="form-control" 
    id="company-name" 
    name="name"
    required
    aria-describedby="companyname" 
    placeholder="Company Name"
    />
    
  </div>
  <div class="form-group">
    <label for="company-description">Description</label>
    <textarea
    class="form-control autosize-target text-left" 
    id="company-description"
    name="description"
     placeholder="Description">
     </textarea>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <input
    class="form-control" 
    id="address" 
    name="address"
    aria-describedby="address" 
    placeholder="Address"
    />
    </div>



  <div class="form-group">
    <label for="contactno">Contact No</label>
    <input
    class="form-control" 
    id="contactno" 
    name="contactno"
    aria-describedby="contactno" 
    placeholder="Contact No."
    />
    </div>


<div class="form-group">
<label for="image">Company Display Picture</label>

<div class="custom-file">
  <input type="file" class="custom-file-input" id="image" name="image">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>

<div class="form-group">

    <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="companytype" name="companytype" value="1">
  <label class="form-check-label" for="inlineCheckbox1">Dealership</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="companytype" name="companytype"  value="2">
  <label class="form-check-label" for="companytype">Auto-Mechanic</label>
</div>
</div>


  </div>



  <div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
   
     </div>


</div>
</div>
</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-right">
      

       
        </div><!-- /.blog-sidebar -->
</div>



@endsection
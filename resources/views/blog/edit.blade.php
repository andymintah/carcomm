@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post"  action="{{ route('blog.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
  <input type="hidden" name="_method" value="post">
  
  <div class="form-group">
    <label for="blog-title">Title</label>
    <input
    class="form-control" 
    id="blog-title" 
    name="title"
    required
    aria-describedby="blog-title" 
    placeholder="Title"
    />
    
  </div>
  <div class="form-group">
    <label for="blog-body">Body</label>
    <textarea
    class="form-control autosize-target text-left" 
    id="blog-body"
    name="blog-body"
     placeholder="Body">
     </textarea>
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
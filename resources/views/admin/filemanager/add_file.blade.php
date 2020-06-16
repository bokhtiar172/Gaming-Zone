@extends('admin_dashboard')
@section('admin_content')

<div class="row justify-content-center">
  <div class="col-md-6 card"><br>
    <span class="h3 text-center bg-info text-light">ADD FILE</span>


    <form class="" action="{{url('store-filemanager')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
    	<div>
    	<label >Enter Your File</label>
        <input type="text" class="form-control" placeholder="Enter File Name" name="name">
    	</div>
      </div>


      <div class="form-group">
    	<div>
    	<label>Select Your File</label>
        <input type="file" name="status" class="form-control" >
    	</div>
      </div>
 <button type="submit" class="btn btn-primary float-right">Add File</button>
    </form>
  </div>
</div>



@endsection

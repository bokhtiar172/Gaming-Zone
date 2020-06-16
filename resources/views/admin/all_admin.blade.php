@extends('admin_dashboard')
@section('admin_content')



<table class="table table-light">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php
      $alladmin=DB::table('admins')
                ->get();
   ?>
  <tbody>
    @foreach($alladmin as $v_admin)
    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_admin->name}}</td>
      <td>{{$v_admin->phone}}</td>
      <td>
        <a class="btn btn-info" href="{{url('/edite-admin/'.$v_admin->id)}}"><i class="fas fa-pen-alt"></i></a>
        <a class="btn btn-danger" href="{{url('/delete-admin/'.$v_admin->id)}}"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection

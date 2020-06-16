@extends('admin_dashboard')
@section('admin_content')

<div class="text-center"style="background-color: #34495E " >
  <strong class="  text-info h3  text-light">All Files List</strong><br>
</div><br>

<table class="table table-light">
  <thead class="text-center">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">File Name</th>
      <th scope="col">File</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
      $allfile=DB::table('filemanagers')->get();
     ?>
    @foreach($allfile as $v_file)
    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_file->name}}</td>
      <td>{{$v_file->filemanager}}</td>
      <td>

        @if($v_file->file_status ==1)
              <a class="btn btn-info" href="{{URL::to('unactive_file/'.$v_file->id)}}"><i class="far fa-hand-point-up"> </i></a>
        @else
              <a class="btn btn-info" href="{{URL::to('active_file/'.$v_file->id)}}"><i class="far fa-hand-point-down"> </i></a>
        @endif
          <a class="btn btn-danger" href="{{URL::to('delete-file/'.$v_file->id)}}"><i class="far fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</table>

@endsection

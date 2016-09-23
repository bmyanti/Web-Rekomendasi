@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - PROGRAM STUDI</h2>
@stop

@section('Content_Administrasi')
  <h1>Program Study</h1>
<hr>
    <table class="table table-striped table-bordered table-hover">
      <thead>
      <tr class="bg-info">

          <th>Nomor</th>
          <th>Program Studi</th>
          <th colspan="2">Actions</th>
      </tr>
        </thead>
        <tbody>
        <?php $a=1 ?>
        @foreach($program_studi as $cities)
            <tr>
                <td>{{$a++}}</td>
                <td>{{$cities->nama_program}}</td>
                <td><a href="{{route('edit_ist',$cities->id_programstudy)}}" class="btn btn-primary">Update</a></td>
                 <td>
                   {!!Form::open(['method'=>'DELETE','route'=>['administrator.destroy',$cities->id_programstudy]])!!}
                     {!!Form::submit('Delete',['class'=>'btn btn-danger'])!!}
                     {!!Form::close()!!}
                </td>
            </tr>
            @endforeach
        <tr>

        </tr> 
        </tbody>
    </table>
      
      <div align="center">
        <a href="{{route('administrator.create')}}" class="btn btn-success">Add new</a>
        </div>
@stop
@extends('admin_page')
@section('Header_Administrasi')
    <h2>EDIT PROGRAM STUDI</h2>
@stop

@section('Content_Administrasi')
   {!! Form::model($program_studi,['url' => 'UpdateProdi','method' => 'PATCH']) !!}

   <div class="form-group">
        {!!Form::label('Nama Program','Nama Program:')!!}
        {!!Form::text('nama_program',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
    </div>
    {{Form::close()}}

@stop
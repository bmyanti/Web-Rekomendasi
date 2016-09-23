@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - PROGRAM STUDI</h2>
@stop

@section('Content_Administrasi')
  <h1>Profil IST - {{$nama_program->nama_program}}</h1>

    {!! Form::model($program_studi,['method'=>'PATCH','route'=>['administrator.update',$program_studi->id_profil_ist]])!!}
<div class="form-group">
    {!! Form::label('SE','SE:')!!}
    {!! Form::text('SE',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('WA','WA:')!!}
    {!! Form::text('WA',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('AN','AN:')!!}
    {!! Form::text('AN',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('GE','GE:')!!}
    {!! Form::text('GE',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('RA','RA:')!!}
    {!! Form::text('RA',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">            
    {!! Form::label('ZR','ZR:')!!}
    {!! Form::text('ZR',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('FA','FA:')!!}
    {!! Form::text('FA',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('WU','WU:')!!}
    {!! Form::text('WU',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('ME','ME:')!!}
    {!! Form::text('ME',null,['class'=>'form-control'])!!}

</div>   
    <div class="form-group">

        
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
   
    <a href="{{route('edit_un',$program_studi->id_programstudy)}}" class="btn btn-primary">Lanjut</a>
 </div>
    {!!Form::close()!!}
@stop
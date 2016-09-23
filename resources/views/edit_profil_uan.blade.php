@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - PROGRAM STUDI</h2>
@stop

@section('Content_Administrasi')
  <h1>Profil IST - {{$nama_program->nama_program}}</h1>

    {!! Form::model($program_studi,['method'=>'PATCH','route'=>['uan.update',$program_studi->id_profil_un]])!!}

<div class="form-group">
    {!! Form::label('Matematika','Matematika:')!!}
    {!! Form::text('matematika',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('Bahasa Indonesia','Bahasa Indonesia:')!!}
    {!! Form::text('bindo',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('Bahasa Inggris','Bahasa Inggris:')!!}
    {!! Form::text('bing',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('IPA','IPA:')!!}
    {!! Form::text('ipa',null,['class'=>'form-control'])!!}

</div>
<div class="form-group">
    {!! Form::label('IPS','IPS:')!!}
    {!! Form::text('ips',null,['class'=>'form-control'])!!}

</div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!!Form::close()!!}
@stop
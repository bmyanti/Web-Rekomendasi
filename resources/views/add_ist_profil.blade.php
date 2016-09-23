@extends('admin_page')
@section('Header_Administrasi')
    <h2>ADMIN - Tambah Program Studi</h2>
@stop

@section('Content_Administrasi')
   
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 {!! Form::open(['url' => 'addIst']) !!}
    <div class="form-group">
        {!!Form::label('SE','SE:')!!}
        {!!Form::text('SE',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('WA','WA:')!!}
        {!!Form::text('WA',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('AN','AN:')!!}
        {!!Form::text('AN',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('GE','GE:')!!}
        {!!Form::text('GE',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('RA','RA:')!!}
        {!!Form::text('RA',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('ZR','ZR:')!!}
        {!!Form::text('ZR',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('FA','FA:')!!}
        {!!Form::text('FA',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('WU','WU:')!!}
        {!!Form::text('WU',null,['class'=>'form-control'])!!}
    </div>
     <div class="form-group">
        {!!Form::label('ME','ME:')!!}
        {!!Form::text('ME',null,['class'=>'form-control'])!!}
    </div>
    <div class="form-group">
        {!! Form::submit('next', ['class' => 'btn btn-primary']) !!}
    </div>
    {!!Form::close()!!}

@stop

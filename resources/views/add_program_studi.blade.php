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

 {!! Form::open(['url' => 'administrator']) !!}
    <div class="form-group">
        {!! Form::label('Nama Program Studi','Nama Program Studi:')!!}
        {!! Form::text('nama_program',null,['class'=>'form-control'])!!}

    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!!Form::close()!!}

@stop

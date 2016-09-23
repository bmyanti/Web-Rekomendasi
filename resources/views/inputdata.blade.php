@extends('head')
@section('content')

    <link rel="stylesheet" href="{{ asset('/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui-custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/jquery-ui-slider-pips.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/square/blue.css') }}">

    <style>
        .row-foto {
            margin-left: 15px;
            margin-right: 15px;
            margin-bottom: 15px;
        }

        .row-foto:before {
            display: table;
            content: " ";
        }

        .row-foto:after {
            display: table;
            content: " ";
            clear: both;
        }

        .full-width {
            width: 100%;
        }

        .link {
            height: 34px;
            line-height: 34px;
            white-space: nowrap;
        }

        .clear-padding {
            padding-left: 0;
        }

        #input-select,
        #input-number {
            padding: 7px;
            margin: 15px 5px 5px;
            width: 70px;
        }

    </style>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {!! Form::open(['url' => 'siswa_data', 'method'=>'POST', 'files'=>'true']) !!}
    <div class="container">

        
            <h4>Isi Data Pribadi Anda</h4>
            <hr>
        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('no_induk','Nomor Induk Siswa',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('no_induk',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('no_induk','',['class'=>'control-label']) !!}
            </div>
        </div>
            
         <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('nama_siswa','Nama Lengkap',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('nama_siswa',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('nama_siswa','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('asal_sekolah','Asal Sekolah',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('asal_sekolah',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('asal_sekolah','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('no_hp','No Handphone',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('no_hp',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('no_hp','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
         @if
            <div class="col-sm-3">
                {!! Form::label('email','Email',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('email',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('email','',['class'=>'control-label']) !!}
            </div>
        </div>

      <div class="form-group" align="center">
        {!! Form::submit('Lanjut', ['class' => 'btn btn-primary']) !!}
       </div>

    </div>
       
    {{ Form::close() }}

   
@stop


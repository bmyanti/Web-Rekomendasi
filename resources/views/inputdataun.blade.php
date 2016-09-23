@extends('head')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
    {!! Form::open(['url' => 'data_un', 'method'=>'POST', 'files'=>'true']) !!}
    <div class="container">

        
            <h4>Isi Nilai UN Anda</h4>
            <hr>
        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('bindo','Bahasa Indonesia',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('bindo',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('bindo','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('bing','Bahasa Inggris',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('bing',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('bing','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('mate','Matematika',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('mate',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('mate','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
         
            <div class="col-sm-3">
                {!! Form::label('ipa','IPA',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('ipa',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('ipa','',['class'=>'control-label']) !!}
            </div>
        </div>

         <div class="row-foto">
         
            <div class="col-sm-3">
                {!! Form::label('ips','IPS',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('ips',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('ips','',['class'=>'control-label']) !!}
            </div>
        </div>

        <div class="row">
		     	 <div class="form-group" align="center">
                  <a class="btn admin_btn" href="{{ route('inputdata') }}">kembali </a>
		        {!! Form::submit('Lanjut', ['class' => 'btn btn-primary']) !!}
                 {{ Form::close() }}
                 
		       </div>
        </div>

		

    </div>
    

   
@stop


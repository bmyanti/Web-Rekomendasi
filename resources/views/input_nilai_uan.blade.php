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
    {{ Form::open() }}
     <div class="container">
     <h4>Isi Nilai UN Anda</h4>
     <hr>

     <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('un_bind','Bahasa Indonesia',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('un_bind',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('un_bind','',['class'=>'control-label']) !!}
            </div>
        </div>

        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('un_bing','Bahasa Inggris',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('un_bing',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('un_bing','',['class'=>'control-label']) !!}
            </div>
        </div>

        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('un_mtk','Matematika',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('un_mtk',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('un_mtk','',['class'=>'control-label']) !!}
            </div>
        </div>

        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('un_ipa','IPA',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('un_ipa',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('un_ipa','',['class'=>'control-label']) !!}
            </div>
        </div>

        <div class="row-foto">
            <div class="col-sm-3">
                {!! Form::label('un_ips','IPS',['class'=>'control-label'])!!}
            </div>
            <div class="col-sm-1">
                {!! Form::label('un_ips',':',['class'=>'control-label']) !!}
            </div>
            <div class="col-sm-8">
             {!! Form::text('un_ips','',['class'=>'control-label']) !!}
            </div>
        </div>
     </div>

       <div>
       

  <p align="center">  

 <a class="btn admin_btn" href="{{ route('inputdata') }}" align="">Balik</a>
 <a class="btn admin_btn" href="{{ route('halaman_ist') }}" align="">Lanjutkan</a>
 

</p>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
    {{ Form::close() }}

   
@stop


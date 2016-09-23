@extends('master')

@section('body')
<script type="text/javascript">
        function noBack()
         {
             window.history.forward()
         }
        noBack();
        window.onload = noBack;
        window.onpageshow = function(evt) { if (evt.persisted) noBack() }
        window.onunload = function() { void (0) }
    </script>

    <body style="background-color: #eeeeee;">
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12" style="padding: 0;">
                        <img src="{{ asset('Pictures/web_images/head.jpg') }}" class="img-responsive center-block" alt="Rainbow">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4" style="padding-top: 50px;">

                        {!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}

                        <div class="form-group">
                            {!! Form::label('Username','Username', ['class' => 'col-sm-4 control-label', 'style' => 'color: #000000;']) !!}
                            <div class="col-sm-8">
                                {!! Form::text('usernameTxt', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </div>
                        </div>

                        <div class="form-group" >
                            {!! Form::label('Password','Password', ['class' => 'col-sm-4 control-label', 'style' => 'color: #000000;']) !!}
                            <div class="col-sm-8">
                                {!! Form::password('passwordTxt', ['class' => 'form-control', 'placeholder' => 'password']) !!}
                            </div>
                        </div>

                    
                        <div class="form-group">
                            @if($errors->has('usernameTxt'))
                                Username perlu diisi
                            @elseif($errors->has('passwordTxt'))
                                Password perlu diisi
                            @endif
                            {{@$errorMessage}}
                        </div>


                        <div class="form-group">
                            <div class="col-sm-12" style="padding-top: 5px;">
                                {!! Form::button('LOGIN',['type' => 'submit', 'style'=>'border:solid gray 1px','class' => 'btn btn-lg btn-block outline']) !!}
                            </div>
                        </div>

                        {!! Form::close() !!}

                    </div>

                    <div class="col-md-12 text-center" style="color: #000000; padding-top: 30px;">
                        <p><b>KITA BISA ^_^</b></p>
                        <p>Rekomendasi Program Studi</p>
                        <p>All Rights Reserved</p>
                    </div>

                

                </div>
            </div>
        </main>


    </body>
    

@stop
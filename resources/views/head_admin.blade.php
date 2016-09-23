@extends('master')

@section('body')

    <body>
        <header>
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12" style="padding: 0; overflow: hidden; height: 200px; width: 100%;">
                        <img src="{{ asset('/Pictures/web_images/head3.png') }}" class="img-responsive center-block" alt="Rainbow">
                    </div>
                </div>


                <div class="row" >
                    <div class="col-md-12" style="padding: 0;">
                            <div class="cbp-hsinner" align="right">
                             <a class="navbar-brand" href="{{ url('/') }}">
                             HOME
                             </a>
                                <ul class="cbp-hsmenu">
                                    <li>
                                        <a href="{{route('about_page')}}">TENTANG KAMI</a>
                                    </li>
                                    <li>
                                        <a href="{{route('help_page')}}">BANTUAN</a>                                       
                                    </li>
                                    <li>
                                         <a href="{{ URL::route('logout') }}">Sign Out</a>                                      
                                    </li>
                                </ul>
                            </div>
                        
                    </div>
                </div>

            </div>
        </header>

        <div id="moving_box" style="margin-top: 0px;">
            @yield('content')
        </div>

    </body>

  
@stop
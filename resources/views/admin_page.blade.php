@extends('head_admin')

@section('content')
 
      <div class="container">
      <div align="right">
     
      </div>
        @yield('Header_Administrasi')

        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="btn-group-vertical btn-block SideBarButton" role="group" aria-label="...">
                    <a class="btn admin_btn" href="{{ route('tentang') }}">TENTANG KAMI</a>
                    <a class="btn admin_btn" href="{{ route('bantuan') }}">BANTUAN</a>
                    <a class="btn admin_btn" href="{{ route('program_studi') }}">PROGRAM STUDI</a>
                    <a class="btn admin_btn" href="{{ route('statistik') }}">STATISTIK</a>

                </div>
            </div>

            <div class="col-md-9">
                @yield('Content_Administrasi')
            </div>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
  
@stop
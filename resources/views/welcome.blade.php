@extends('head')

@section('content')

     <div align="center">
                    
                <h1>SELAMAT DATANG </h1>
                <h3><b>Sistem Rekomendasi Program studi</b><br><br><br></h3>
               
                Klik tombol "Mulai" untuk mengetahui program studi yang cocok buat anda
                <br><br>
                </div>
                <div align="center">
            
                <a class="btn admin_btn" href="{{ route('inputdata') }}"><h3>MULAI </h3></a>

                 <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
                </div>
  
@stop
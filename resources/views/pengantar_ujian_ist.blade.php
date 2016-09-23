@extends('head')

@section('content')

     <div align="center">
                    
               
                <h3><b>Setelah ini anda akan memulai test intelegensi.<br>
                Mohon isi test dengan kemampuan sendiri agar hasil rekomendasi <br>
                sesuai dengan diri anda dan kerjakan tiap soal sebelum waktu habis</b><br><br><br></h3>
               
                <br><br>
                </div>
                <div align="center">
                <h3>Klik "Mulai" untuk mengawali test intelegensi</h3>
                  

                </div>
                <div align="center">
                 <a class="btn admin_btn" href="{{ route('soal_ist') }}" align=""><h3>Mulai</h3></a>
                </div>


                 <script type="text/javascript">
        $(document).ready(function(){
            Waves.attach('.admin_btn', ['waves-button', 'waves-float']);
            Waves.init();
        });
    </script>
  
@stop
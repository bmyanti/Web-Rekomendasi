@extends('head')

@section('content')
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
 {!! Form::open(array('url' => 'pengantar_ist_soal_me', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">

<div id="blink1" class="highlight">
    <div>
<p>Hafalah kata kata bercetak tebal berikut ini  selama 3 menit. Setelah 3 menit halaman ini akan otomatis berganti ke halaman berikutnya yang berisikan pertanyaan dari kata-kata yang harus di hafalkan ini  : </p>
<p>Contoh:</p>
<p>Bunga        : Flamboyan, Lily, Soka, Yasmin, Dahliah</p>
<p>Perkakas : Wajan, Jarum, Palu, Cangkul, Kikir</p>
<p>Negara       : India, Ethiopia, Timorleste, Ngeria, Venezuela</p>
<p>Kesenian : Gamelan, Opera , Arca, Quintet, Ukiran</p>

&emsp;1.  Kata yang mempunyai huruf permulaan Q adalah suatu …..
&emsp;&emsp;a.  Bunga <br>
&emsp;&emsp;b.  Perkakas<br>
&emsp;&emsp;c.  Negara<br/>
&emsp;&emsp;d.  Kesenian<br>
&emsp;&emsp;e.  Hewan<br>
&emsp;<p>Quintet adalah termasuk jenis kesenian, sehingga jawaban yang benar adalah kesenian. Oleh karena itu pilih jawaban : <b>E. Kesenian</b></p>
</p>

&emsp;2.  Kata yang mempunyai huruf permulaan R adalah suatu
&emsp;&emsp;a.  Bunga <br>
&emsp;&emsp;b.  Perkakas<br>
&emsp;&emsp;c.  Negara<br/>
&emsp;&emsp;d.  Kesenian<br>
&emsp;&emsp;e.  Hewan<br>
&emsp;<p>Rusa termasul dalam jenis Hewan, sehingga jawaban yang benar adalah hewan. Oleh karena itu pilihan jawaban : <b>E) Hewan</b></p>
</p>
<br><br>
</div>
</div>

<div class="form-group">

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">

<!--  <div align="center">
        <a class="btn admin_btn" href="{{ route('soal_wa') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="nextME">

                            </div>
                        </div>
                  </ul>
                </div>
</form>

<script>    
    setTimeout(function() {
    document.querySelector('[name="nextME"]').click();
}, 60000);
</script>

<script type="text/javascript">
// set minutes
var mins = 3;
 
var secs = mins * 60;
function countdown() {
    setTimeout('Decrement()',1000);
}
function Decrement() {
    if (document.getElementById) {
        minutes = document.getElementById("minutes");
        seconds = document.getElementById("seconds");
        // if less than a minute remaining
        if (seconds < 59) {
            seconds.value = secs;
        } else {
            minutes.value = getminutes();
            seconds.value = getseconds();
        }
        secs--;
        setTimeout('Decrement()',1000);
    }
}
function getminutes() {
    // minutes is seconds divided by 60, rounded down
    mins = Math.floor(secs / 60);
    return mins;
}
function getseconds() {
    // take mins remaining (as seconds) away from total seconds remaining
    return secs-Math.round(mins *60);
}
</script>
</head>
<body>
 
<div id="timer">
    Waktu Anda Untuk Menghapal: <input id="minutes" type="text" style="width: 14px; border: none; background-color:none; font-size: 19px; font-weight: bold;"> menit dan <input id="seconds" type="text" style="width: 26px; border: none; background-color:none; font-size: 19px; font-weight: bold;"> detik.
</div>
<script>
countdown();
</script>

{!! Form::close() !!}
  
@stop
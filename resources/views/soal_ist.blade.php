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
 {!! Form::open(array('url' => 'ist_se_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
                 
<p>Soal-soal ini terdiri atas kalimat-kalimat. Pada setiap kalimat terdapat satu kata yang hilang dan disediakan 5 (lima) jawabannya. Pilihlah kata yang tepat, yang dapat menyempurnakan kalimat itu ! </p>
<p>Contoh:</p>
&emsp;1.  Seekor kuda mempunyai kesamaan terbanyak dengan seekor …
&emsp;&emsp;a. Kucing<br>
&emsp;&emsp;b.  kangguru<br>
&emsp;&emsp;c.  Sapi<br/>
&emsp;&emsp;d.  Keledai<br>
&emsp;&emsp;e.  Anjing<br>
&emsp;<p>Jawaban yang benar adalah : <b>c) Keledai</b></p>
</p>

&emsp;2.  Lawan dari "Harapan" adalah ......
&emsp;&emsp;a. Duka<br>
&emsp;&emsp;b.  Putus asa<br>
&emsp;&emsp;c.  Sengsara<br/>
&emsp;&emsp;d.  Benci<br>
&emsp;<p>Jawaban yang benar adalah : <b>b) Putus asa</b></p>
</p>
<br><br>
<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1. Suatu …….. tidak termasuk persoalan pencegahan kecelakan.<br/>

&emsp;<input type="radio" name="answerSE1" value="1">   a.  Lampu Lalulintas<br>
&emsp;<input type="radio" name="answerSE1" value="2">   b.  Kaca mata pelindung <br>
&emsp;<input type="radio" name="answerSE1" value="3">   c.  Kotak PPK<br/>
&emsp;<input type="radio" name="answerSE1" value="4">   d. Tanda Peringatan<br>
&emsp;<input type="radio" name="answerSE1" value="5">   e.  Palang Kereta Api<br>
</p>

2.  Mata uang dari Rp.50,- garis tengahnya adalah ……….<br/>
&emsp;<input type="radio" name="answerSE2" value="1">a.  17<br>
&emsp;<input type="radio" name="answerSE2" value="2">b.  29<br>
&emsp;<input type="radio" name="answerSE2" value="3">c.  25 <br>
&emsp;<input type="radio" name="answerSE2" value="4">d.  24 <br>
&emsp;<input type="radio" name="answerSE2" value="5">e.  15 <br>
</p>

3.  Seseorang yang bersikap menyangsikan setiap kemajuan adalah orang yang ……<br/>
&emsp;<input type="radio" name="answerSE3" value="1">a.  Demokratis<br>
&emsp;<input type="radio" name="answerSE3" value="2">b.  Radikal<br>
&emsp;<input type="radio" name="answerSE3" value="3">c. Liberal <br>
&emsp;<input type="radio" name="answerSE3" value="4">d.  Konservatif<br>
</p>

4.  Lawanya “tidak pernah” adalah ………<br/>

&emsp;<input type="radio" name="answerSE4" value="1">a.  Sering <br>
&emsp;<input type="radio" name="answerSE4" value="2">b.  Kadang <br>
&emsp;<input type="radio" name="answerSE4" value="3">c.  Jarang <br>
&emsp;<input type="radio" name="answerSE4" value="4">d.  Kerap kali<br>
&emsp;<input type="radio" name="answerSE4" value="5">e.  selalu<br>
&emsp;</p>

5.  Jarak antara Jakarta Surabaya kira-kira ……<br/>
&emsp;<input type="radio" name="answerSE5" value="1">a.  650<br>
&emsp;<input type="radio" name="answerSE5" value="2">b.  1000 <br>
&emsp;<input type="radio" name="answerSE5" value="3">c.  800 <br/>
&emsp;<input type="radio" name="answerSE5" value="4">d.  6000 <br>
&emsp;<input type="radio" name="answerSE5" value="5">e.  950 <br>
</p>

6.  Untuk dapat membuat nada yang rendah dalam mendalam, kita memerlukan banyak ….<br/>

&emsp;<input type="radio" name="answerSE6" value="1">a.  Kekuatan <br>
&emsp;<input type="radio" name="answerSE6" value="2">b.  Peranan <br>
&emsp;<input type="radio" name="answerSE6" value="3">c.  Ayunan <br>
&emsp;<input type="radio" name="answerSE6" value="4">d.  Berat<br>
&emsp;<input type="radio" name="answerSE6" value="5">e.  Suara<br>
</p>

7.  Ayah ……. Lebih pengalaman dai pada anaknya<br/>
&emsp;<input type="radio" name="answerSE7" value="1">a.  Selalu<br>
&emsp;<input type="radio" name="answerSE7" value="2">b.  Biasanya <br>
&emsp;<input type="radio" name="answerSE7" value="3">c.  Jauh <br>
&emsp;<input type="radio" name="answerSE7" value="4">d.  Jarang <br>
&emsp;<input type="radio" name="answerSE7" value="5">e.  Pada Dasarnya<br> 
</p>

8.  Diantara kota-kota berikut, maka kota ……. Letaknya paling selatan.<br/>
&emsp;<input type="radio" name="answerSE8" value="1">a.  Jakarta<br>
&emsp;<input type="radio" name="answerSE8" value="2">b.  Bandung <br>
&emsp;<input type="radio" name="answerSE8" value="3">c.  Cireboon <br>
&emsp;<input type="radio" name="answerSE8" value="4">d.  Semarang<br>
&emsp;<input type="radio" name="answerSE8" value="5">e.  Surabaya<br>
</p>

9. Jika kita mengetahui jumlah persentasi nomor-nomor lotere yang tidak menang, maka kita dapat menghitung ……<br/>

&emsp;<input type="radio" name="answerSE9" value="1">a.  Jumlah nomor yang menang <br>
&emsp;<input type="radio" name="answerSE9" value="2">b.  Pakai Lotere <br>
&emsp;<input type="radio" name="answerSE9" value="3">c.  Kemungkinan menang<br> 
&emsp;<input type="radio" name="answerSE9" value="4">d.  Jumlah pengikut<br>
&emsp;<input type="radio" name="answerSE9" value="5">e.  Tinggi keuntungan<br>
</p>

10. Seorang anak yang baru berumur 10 tahun tingginya rata-rata …..<br/>
&emsp;<input type="radio" name="answerSE10" value="1">a.  150<br>
&emsp;<input type="radio" name="answerSE10" value="2">b.  130<br>
&emsp;<input type="radio" name="answerSE10" value="3">c.  110<br>
&emsp;<input type="radio" name="answerSE10" value="4">d.  105<br>
&emsp;<input type="radio" name="answerSE10" value="5">e.  115<br>
</p>

11. Pengaruh seseorang terhadap orang lain seharusnya tergantung pada...<br/>

&emsp;<input type="radio" name="answerSE11" value="1">a.  Kekuasaan<br> 
&emsp;<input type="radio" name="answerSE11" value="2">b.  Bujukan <br>
&emsp;<input type="radio" name="answerSE11" value="3">c.  Kekayaan <br>
&emsp;<input type="radio" name="answerSE11" value="4">d.  Keberanian<br>
&emsp;<input type="radio" name="answerSE11" value="5">e.  Kewibawaan<br>
</p>

12. Lawan “hemat” adalah ….<br/>
&emsp;<input type="radio" name="answerSE12" value="1">a.  Murah<br>
&emsp;<input type="radio" name="answerSE12" value="2">b.  Kikir<br>
&emsp;<input type="radio" name="answerSE12" value="3">c.  Boros<br>
&emsp;<input type="radio" name="answerSE12" value="4">d.  Berani<br>
&emsp;<input type="radio" name="answerSE12" value="5">e.  Kaya<br>
</p>

13. .… Tidak termasuk cuaca<br/>
&emsp;<input type="radio" name="answerSE13" value="1">a.  Angin puyuh<br>
&emsp;<input type="radio" name="answerSE13" value="2">b.  Halilintar<br>
&emsp;<input type="radio" name="answerSE13" value="3">c.  Salju<br>
&emsp;<input type="radio" name="answerSE13" value="4">d.  Gempa bumi<br>
&emsp;<input type="radio" name="answerSE13" value="5">e.  Kabut<br>
</p>

14. Lawanya “setia” adalah …..<br/>

&emsp;<input type="radio" name="answerSE14" value="1">a.  Cinta<br>
&emsp;<input type="radio" name="answerSE14" value="2">b.  Benci<br>
&emsp;<input type="radio" name="answerSE14" value="3">c.  Persahabatan<br> 
&emsp;<input type="radio" name="answerSE14" value="4">d.  Khianat<br>
&emsp;<input type="radio" name="answerSE14" value="5">e.  Permusuhan<br>
</p>

15. Seekor kuda selalu mempunyai...<br/>
&emsp;<input type="radio" name="answerSE15" value="1">a.  Kandang<br>
&emsp;<input type="radio" name="answerSE15" value="2">b.  Ladam<br>
&emsp;<input type="radio" name="answerSE15" value="3">c.  Pelana<br>
&emsp;<input type="radio" name="answerSE15" value="4">d.  Kuku<br>
&emsp;<input type="radio" name="answerSE15" value="5">e.  Surai<br>
</p>

16. Seseorang paman ….. Lebih tua dari kemenakannya<br/>

&emsp;<input type="radio" name="answerSE16" value="1">a.  Jarang<br>
&emsp;<input type="radio" name="answerSE16" value="2">b.  Biasanya<br>
&emsp;<input type="radio" name="answerSE16" value="3">c.  Selalu<br>
&emsp;<input type="radio" name="answerSE16" value="4">d.  Tak pernah<br>
&emsp;<input type="radio" name="answerSE16" value="5">e.  Kadang-kadang<br>
</p>

17. Pada jumlah yang sama, nilai kalori tertinggi terdapat pada..<br/>
&emsp;<input type="radio" name="answerSE17" value="1">a.  Ikan<br>
&emsp;<input type="radio" name="answerSE17" value="2">b.  Daging<br>
&emsp;<input type="radio" name="answerSE17" value="3">c.  Lemak<br>
&emsp;<input type="radio" name="answerSE17" value="4">d.  Tahu <br>
&emsp;<input type="radio" name="answerSE17" value="5">e.  Sayuran <br>
</p>

18. Pada suatu pertandingan selalu terdapat<br/>
&emsp;<input type="radio" name="answerSE18" value="1">a.  Lawan<br>
&emsp;<input type="radio" name="answerSE18" value="2">b.  Wasit<br>
&emsp;<input type="radio" name="answerSE18" value="3">c.  Penonton<br>
&emsp;<input type="radio" name="answerSE18" value="4">d.  Sorak<br>
&emsp;<input type="radio" name="answerSE18" value="5">e.  Kemenangan<br>
</p>

19. Suatu pernyataan yang belum dipastikan dikatakan sebagai pernyataan yang …..<br/>

&emsp;<input type="radio" name="answerSE19" value="1">a.  Paradoks <br>
&emsp;<input type="radio" name="answerSE19" value="2">b.  Tergesa-gesa <br>
&emsp;<input type="radio" name="answerSE19" value="3">c.  Mempunyai arti lengkap <br>
&emsp;<input type="radio" name="answerSE19" value="4">d.  Menyesatkan<br>
&emsp;<input type="radio" name="answerSE19" value="5">e.  Hipotesis<br>
</p>

20. Pada sepatu selalu terdapat<br/>
&emsp;<input type="radio" name="answerSE20" value="1">a.  Kulit<br>
&emsp;<input type="radio" name="answerSE20" value="2">b.  Sol <br>
&emsp;<input type="radio" name="answerSE20" value="3">c.  Tali sepatu<br> 
&emsp;<input type="radio" name="answerSE20" value="4">d.  Gesper <br>
&emsp;<input type="radio" name="answerSE20" value="5">e.  Lidah <br>
</p>



	<!-- <div align="center">
        <a class="btn admin_btn" href="{{ route('soal_wa') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitSE">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
/**/
</head>
 
<script type="text/javascript">
// set minutes
var mins = 10;
 
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
    Waktu Anda: <input id="minutes" type="text" style="width: 14px; border: none; background-color:none; font-size: 19px; font-weight: bold;"> menit dan <input id="seconds" type="text" style="width: 26px; border: none; background-color:none; font-size: 19px; font-weight: bold;"> detik.
</div>
<script>
countdown();
</script>


{!! Form::close() !!}
  
@stop
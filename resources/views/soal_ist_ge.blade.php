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
 {!! Form::open(array('url' => 'ist_ge_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
<p>Pada soal ini akan diberikan dua kata. Carilah satu perkataan yang dapat meliputi / mewakili  pengertian kedua kata tadi. </p>
<p>Contoh:</p>
&emsp;1.  Ayam – Itik
&emsp;&emsp;a.  Mamalia<br>
&emsp;&emsp;b.  Unggas<br/>
&emsp;&emsp;c.  Amfibi<br>
&emsp;&emsp;d.  Manusia<br>
&emsp;<p>Kata "Unggas" dapat meliputi pengertian kedua kata tersebut. Oleh karena jawabannya adalah 
<b>b) Unggas </b></p>
</p>

&emsp;2.  Gaun-Celana
&emsp;&emsp;a. Makanan<br>
&emsp;&emsp;b.  Pakaian<br>
&emsp;&emsp;c.  Minuman<br/>
&emsp;&emsp;d.  Alat Tulis<br>
&emsp;<p>Kata "Pakaian" dapat meliputi pengertian kedua kata tersebut. Oleh karena jawabannya adalah 
<b>b) Pakaian </b></p>
</p>
<br><br>

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1. Suatu …….. tidak termasuk persoalan pencegahan kecelakan.<br/>

&emsp;<input type="radio" name="answerGE1" value="1">   a.  Lampu Lalulintas<br>
&emsp;<input type="radio" name="answerGE1" value="2">   b.  Kaca mata pelindung <br>
&emsp;<input type="radio" name="answerGE1" value="3">   c.  Kotak PPK<br/>
&emsp;<input type="radio" name="answerGE1" value="4">   d. Tanda Peringatan<br>
&emsp;<input type="radio" name="answerGE1" value="5">   e.  Palang Kereta Api<br>
</p>

2.  Mata uang dari Rp.50,- garis tengahnya adalah ……….<br/>
&emsp;<input type="radio" name="answerGE2" value="1">a.  17<br>
&emsp;<input type="radio" name="answerGE2" value="2">b.  29<br>
&emsp;<input type="radio" name="answerGE2" value="3">c.  25 <br>
&emsp;<input type="radio" name="answerGE2" value="4">d.  24 <br>
&emsp;<input type="radio" name="answerGE2" value="5">e.  15 <br>
</p>

3.  GEGEorang yang bersikap menyangsikan GEtiap kemajuan adalah orang yang ……<br/>
&emsp;<input type="radio" name="answerGE3" value="1">a.  Demokratis<br>
&emsp;<input type="radio" name="answerGE3" value="2">b.  Radikal<br>
&emsp;<input type="radio" name="answerGE3" value="3">c. Liberal <br>
&emsp;<input type="radio" name="answerGE3" value="4">d.  KonGErvatif<br>
</p>

4.  Lawanya “tidak pernah” adalah ………<br/>

&emsp;<input type="radio" name="answerGE4" value="1">a.  GEring <br>
&emsp;<input type="radio" name="answerGE4" value="2">b.  Kadang <br>
&emsp;<input type="radio" name="answerGE4" value="3">c.  Jarang <br>
&emsp;<input type="radio" name="answerGE4" value="4">d.  Kerap kali<br>
&emsp;<input type="radio" name="answerGE4" value="5">e.  GElalu<br>
&emsp;</p>

5.  Jarak antara Jakarta Surabaya kira-kira ……<br/>
&emsp;<input type="radio" name="answerGE5" value="1">a.  650<br>
&emsp;<input type="radio" name="answerGE5" value="2">b.  1000 <br>
&emsp;<input type="radio" name="answerGE5" value="3">c.  800 <br/>
&emsp;<input type="radio" name="answerGE5" value="4">d.  6000 <br>
&emsp;<input type="radio" name="answerGE5" value="5">e.  950 <br>
</p>

6.  Untuk dapat membuat nada yang rendah dalam mendalam, kita memerlukan banyak ….<br/>

&emsp;<input type="radio" name="answerGE6" value="1">a.  Kekuatan <br>
&emsp;<input type="radio" name="answerGE6" value="2">b.  Peranan <br>
&emsp;<input type="radio" name="answerGE6" value="3">c.  Ayunan <br>
&emsp;<input type="radio" name="answerGE6" value="4">d.  Berat<br>
&emsp;<input type="radio" name="answerGE6" value="5">e.  Suara<br>
</p>

7.  Ayah ……. Lebih pengalaman dai pada anaknya<br/>
&emsp;<input type="radio" name="answerGE7" value="1">a.  GElalu<br>
&emsp;<input type="radio" name="answerGE7" value="2">b.  Biasanya <br>
&emsp;<input type="radio" name="answerGE7" value="3">c.  Jauh <br>
&emsp;<input type="radio" name="answerGE7" value="4">d.  Jarang <br>
&emsp;<input type="radio" name="answerGE7" value="5">e.  Pada Dasarnya<br> 
</p>

8.  Diantara kota-kota berikut, maka kota ……. Letaknya paling GElatan.<br/>
&emsp;<input type="radio" name="answerGE8" value="1">a.  Jakarta<br>
&emsp;<input type="radio" name="answerGE8" value="2">b.  Bandung <br>
&emsp;<input type="radio" name="answerGE8" value="3">c.  Cireboon <br>
&emsp;<input type="radio" name="answerGE8" value="4">d.  GEmarang<br>
&emsp;<input type="radio" name="answerGE8" value="5">e.  Surabaya<br>
</p>

9. Jika kita mengetahui jumlah perGEntasi nomor-nomor lotere yang tidak menang, maka kita dapat menghitung ……<br/>

&emsp;<input type="radio" name="answerGE9" value="1">a.  Jumlah nomor yang menang <br>
&emsp;<input type="radio" name="answerGE9" value="2">b.  Pakai Lotere <br>
&emsp;<input type="radio" name="answerGE9" value="3">c.  Kemungkinan menang<br> 
&emsp;<input type="radio" name="answerGE9" value="4">d.  Jumlah pengikut<br>
&emsp;<input type="radio" name="answerGE9" value="5">e.  Tinggi keuntungan<br>
</p>

10. GEorang anak yang baru berumur 10 tahun tingginya rata-rata …..<br/>
&emsp;<input type="radio" name="answerGE10" value="1">a.  150<br>
&emsp;<input type="radio" name="answerGE10" value="2">b.  130<br>
&emsp;<input type="radio" name="answerGE10" value="3">c.  110<br>
&emsp;<input type="radio" name="answerGE10" value="4">d.  105<br>
&emsp;<input type="radio" name="answerGE10" value="5">e.  115<br>
</p>

11. Pengaruh GEGEorang terhadap orang lain GEharusnya tergantung pada...<br/>

&emsp;<input type="radio" name="answerGE11" value="1">a.  Kekuasaan<br> 
&emsp;<input type="radio" name="answerGE11" value="2">b.  Bujukan <br>
&emsp;<input type="radio" name="answerGE11" value="3">c.  Kekayaan <br>
&emsp;<input type="radio" name="answerGE11" value="4">d.  Keberanian<br>
&emsp;<input type="radio" name="answerGE11" value="5">e.  Kewibawaan<br>
</p>

12. Lawan “hemat” adalah ….<br/>
&emsp;<input type="radio" name="answerGE12" value="1">a.  Murah<br>
&emsp;<input type="radio" name="answerGE12" value="2">b.  Kikir<br>
&emsp;<input type="radio" name="answerGE12" value="3">c.  Boros<br>
&emsp;<input type="radio" name="answerGE12" value="4">d.  Berani<br>
&emsp;<input type="radio" name="answerGE12" value="5">e.  Kaya<br>
</p>

13. .… Tidak termasuk cuaca<br/>
&emsp;<input type="radio" name="answerGE13" value="1">a.  Angin puyuh<br>
&emsp;<input type="radio" name="answerGE13" value="2">b.  Halilintar<br>
&emsp;<input type="radio" name="answerGE13" value="3">c.  Salju<br>
&emsp;<input type="radio" name="answerGE13" value="4">d.  Gempa bumi<br>
&emsp;<input type="radio" name="answerGE13" value="5">e.  Kabut<br>
</p>

14. Lawanya “GEtia” adalah …..<br/>

&emsp;<input type="radio" name="answerGE14" value="1">a.  Cinta<br>
&emsp;<input type="radio" name="answerGE14" value="2">b.  Benci<br>
&emsp;<input type="radio" name="answerGE14" value="3">c.  Persahabatan<br> 
&emsp;<input type="radio" name="answerGE14" value="4">d.  Khianat<br>
&emsp;<input type="radio" name="answerGE14" value="5">e.  Permusuhan<br>
</p>

15. GEekor kuda GElalu mempunyai...<br/>
&emsp;<input type="radio" name="answerGE15" value="1">a.  Kandang<br>
&emsp;<input type="radio" name="answerGE15" value="2">b.  Ladam<br>
&emsp;<input type="radio" name="answerGE15" value="3">c.  Pelana<br>
&emsp;<input type="radio" name="answerGE15" value="4">d.  Kuku<br>
&emsp;<input type="radio" name="answerGE15" value="5">e.  Surai<br>
</p>

16. GEGEorang paman ….. Lebih tua dari kemenakannya<br/>

&emsp;<input type="radio" name="answerGE16" value="1">a.  Jarang<br>
&emsp;<input type="radio" name="answerGE16" value="2">b.  Biasanya<br>
&emsp;<input type="radio" name="answerGE16" value="3">c.  GElalu<br>
&emsp;<input type="radio" name="answerGE16" value="4">d.  Tak pernah<br>
&emsp;<input type="radio" name="answerGE16" value="5">e.  Kadang-kadang<br>
</p>

17. Pada jumlah yang sama, nilai kalori tertinggi terdapat pada..<br/>
&emsp;<input type="radio" name="answerGE17" value="1">a.  Ikan<br>
&emsp;<input type="radio" name="answerGE17" value="2">b.  Daging<br>
&emsp;<input type="radio" name="answerGE17" value="3">c.  Lemak<br>
&emsp;<input type="radio" name="answerGE17" value="4">d.  Tahu <br>
&emsp;<input type="radio" name="answerGE17" value="5">e.  Sayuran <br>
</p>

18. Pada suatu pertandingan GElalu terdapat<br/>
&emsp;<input type="radio" name="answerGE18" value="1">a.  Lawan<br>
&emsp;<input type="radio" name="answerGE18" value="2">b.  Wasit<br>
&emsp;<input type="radio" name="answerGE18" value="3">c.  Penonton<br>
&emsp;<input type="radio" name="answerGE18" value="4">d.  Sorak<br>
&emsp;<input type="radio" name="answerGE18" value="5">e.  Kemenangan<br>
</p>

19. Suatu pernyataan yang belum dipastikan dikatakan GEbagai pernyataan yang …..<br/>

&emsp;<input type="radio" name="answerGE19" value="1">a.  Paradoks <br>
&emsp;<input type="radio" name="answerGE19" value="2">b.  Tergesa-gesa <br>
&emsp;<input type="radio" name="answerGE19" value="3">c.  Mempunyai arti lengkap <br>
&emsp;<input type="radio" name="answerGE19" value="4">d.  Menyesatkan<br>
&emsp;<input type="radio" name="answerGE19" value="5">e.  Hipotesis<br>
</p>

20. Pada GEpatu GElalu terdapat<br/>
&emsp;<input type="radio" name="answerGE20" value="1">a.  Kulit<br>
&emsp;<input type="radio" name="answerGE20" value="2">b.  Sol <br>
&emsp;<input type="radio" name="answerGE20" value="3">c.  Tali GEpatu<br> 
&emsp;<input type="radio" name="answerGE20" value="4">d.  Gesper <br>
&emsp;<input type="radio" name="answerGE20" value="5">e.  Lidah <br>
</p>


<!-- 
	<div align="center">
        <a class="btn admin_btn" href="{{ route('soal_ra') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitGE">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
{!! Form::close() !!}
  
@stop
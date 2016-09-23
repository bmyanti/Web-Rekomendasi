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
 {!! Form::open(array('url' => 'ist_wa_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
                 
<p>Pada tes ini akan di berikan lima kata pada setiap soal. 4 dari 5 kata memiliki kesamaan makna. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.</p>
<p>Contoh:</p>
&emsp;1. <br>
&emsp;&emsp;a.  Meja<br>
&emsp;&emsp;b.  Kursi<br>
&emsp;&emsp;c.  Burung<br/>
&emsp;&emsp;d.  Lemari<br>
&emsp;&emsp;e.  Tempat Tidur<br>
&emsp;<p>Meja, kursi, lemari dan tempat tidur adalah perabot rumah, sedangkan “burung: bukanlah perabot rumah yang tidak memiliki kesamaan dengan keempat kata yang lain. Jawaban yang benar adadalah :  Burung oler karena itu paa kertas jawaban. Pilih jawaban  <b>C.burung</b></p>
</p>

&emsp;2. <br>
&emsp;&emsp;a.  Duduk<br>
&emsp;&emsp;b.  Berbaring<br>
&emsp;&emsp;c.  Berdiri<br/>
&emsp;&emsp;d.  Berjalan<br>
&emsp;&emsp;e.  Berjongkok<br>
&emsp;<p>Pada duduk berbaring, berdiri dan berjongkok adalah yang orang berada dalam keadaan tidak bergerak sedangkan “berjalan” orang berada dalam keadaan bergerak. Jawaban yang benar adalah :  berjalan oleh karena itu pada kertas jawaban, pilih jawaban  <b>D. Berjalan</b></p>
</p>
<br><br>

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA1" value="1">a.	Jarak<br>
&emsp;<input type="radio" name="answerWA1" value="2">b.	Perpisahan<br>
&emsp;<input type="radio" name="answerWA1" value="3">c.	Tugas<br/>
&emsp;<input type="radio" name="answerWA1" value="4">d.	Batas<br>
&emsp;<input type="radio" name="answerWA1" value="5">e.	Perceraian<br>
</p>

2.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA2" value="1">a.	Saringan<br>
&emsp;<input type="radio" name="answerWA2" value="2">b.	Kelambu<br>
&emsp;<input type="radio" name="answerWA2" value="3">c.	Payung<br>
&emsp;<input type="radio" name="answerWA2" value="4">d.	Tapisan<br>
&emsp;<input type="radio" name="answerWA2" value="5">e.	Jala<br>
</p>

3.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA3" value="1">a.	Putih<br>
&emsp;<input type="radio" name="answerWA3" value="2">b.	Pucat<br>
&emsp;<input type="radio" name="answerWA3" value="3">c.	Buram<br>
&emsp;<input type="radio" name="answerWA3" value="4">d.	Kasar<br>
&emsp;<input type="radio" name="answerWA3" value="5">e.	Berkilauan<br>
</p>

4.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA4" value="1">a.	Otobis<br>
&emsp;<input type="radio" name="answerWA4" value="2">b.	Pesawat terbang<br>
&emsp;<input type="radio" name="answerWA4" value="3">c.	Sepeda motor<br>
&emsp;<input type="radio" name="answerWA4" value="4">d.	Sepeda<br>
&emsp;<input type="radio" name="answerWA4" value="5">e.	Kapal Api<br>
</p>

5.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA5" value="1">a.	Biola<br>
&emsp;<input type="radio" name="answerWA5" value="2">b.	Seruling<br>
&emsp;<input type="radio" name="answerWA5" value="3">c.	Clarinet<br>
&emsp;<input type="radio" name="answerWA5" value="4">d.	Terompet<br>
&emsp;<input type="radio" name="answerWA5" value="5">e.	Saxophone<br>
&emsp;</p>

6.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA6" value="1">a.	Lingkaran<br>
&emsp;<input type="radio" name="answerWA6" value="2">b.	Panah <br>
&emsp;<input type="radio" name="answerWA6" value="3">c.	Elips <br/>
&emsp;<input type="radio" name="answerWA6" value="4">d.	Busur <br>
&emsp;<input type="radio" name="answerWA6" value="5">e.	lengkung <br>
</p>

7.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA7" value="1">a.	mengetuk <br>
&emsp;<input type="radio" name="answerWA7" value="2">b.	memaki <br>
&emsp;<input type="radio" name="answerWA7" value="3">c.	menjahit<br>
&emsp;<input type="radio" name="answerWA7" value="4">d.	menggergaji<br>
&emsp;<input type="radio" name="answerWA7" value="5">e.	memukul<br>
</p>

8.  Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA8" value="1">a.	Lebar<br>
&emsp;<input type="radio" name="answerWA8" value="2">b.	Keliling <br>
&emsp;<input type="radio" name="answerWA8" value="3">c.	Luas <br>
&emsp;<input type="radio" name="answerWA8" value="4">d.	Isi<br>
&emsp;<input type="radio" name="answerWA8" value="5">e.	panjang<br>
</p>

9. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA9" value="1">a.	Mengingat<br>
&emsp;<input type="radio" name="answerWA9" value="2">b.	Menyatukan <br>
&emsp;<input type="radio" name="answerWA9" value="3">c.	Melepaskan<br> 
&emsp;<input type="radio" name="answerWA9" value="4">d.	Mengaitkan<br>
&emsp;<input type="radio" name="answerWA9" value="5">e.	melekatkan<br>
</p>

10. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA10" value="1">a.	Arah<br>
&emsp;<input type="radio" name="answerWA10" value="2">b.	Timur<br>
&emsp;<input type="radio" name="answerWA10" value="3">c.	Perjalanan<br>
&emsp;<input type="radio" name="answerWA10" value="4">d.	Tujuan<br>
&emsp;<input type="radio" name="answerWA10" value="5">e.	selatan<br>
</p>

11. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA11" value="1">a.  	bergelombang<br> 
&emsp;<input type="radio" name="answerWA11" value="2">b.	Kasar <br>
&emsp;<input type="radio" name="answerWA11" value="3">c.	Berduri <br>
&emsp;<input type="radio" name="answerWA11" value="4">d.	Licin<br>
&emsp;<input type="radio" name="answerWA11" value="5">e.	lurus<br>
</p>

12. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA12" value="1">a.	Jam<br>
&emsp;<input type="radio" name="answerWA12" value="2">b.	Kompas<br>
&emsp;<input type="radio" name="answerWA12" value="3">c.	Penunjuk jalan<br>
&emsp;<input type="radio" name="answerWA12" value="4">d.  	Bintang Pari<br>
&emsp;<input type="radio" name="answerWA12" value="5">e.	arah<br>
</p>

13. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA13" value="1">a.	Kebijaksanaan<br>
&emsp;<input type="radio" name="answerWA13" value="2">b.	Pendidikan<br>
&emsp;<input type="radio" name="answerWA13" value="3">c.	Perencanaan<br>
&emsp;<input type="radio" name="answerWA13" value="4">d.	Penempatan<br>
&emsp;<input type="radio" name="answerWA13" value="5">e.	Pengarahan<br>
</p>

14. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA14" value="1">a.	Bermotor<br>
&emsp;<input type="radio" name="answerWA14" value="2">b.	Berjalan<br>
&emsp;<input type="radio" name="answerWA14" value="3">c.	Berlayar<br> 
&emsp;<input type="radio" name="answerWA14" value="4">d.	Bersepada<br>
&emsp;<input type="radio" name="answerWA14" value="5">e.	Berkuda<br>
</p>

15. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA15" value="1">a.	Gambar<br>
&emsp;<input type="radio" name="answerWA15" value="2">b.	Lukisan<br>
&emsp;<input type="radio" name="answerWA15" value="3">c.	Potret<br>
&emsp;<input type="radio" name="answerWA15" value="4">d.	Patung<br>
&emsp;<input type="radio" name="answerWA15" value="5">e.	Ukiran<br>
</p>

16. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA16" value="1">a.	Jembatan<br>
&emsp;<input type="radio" name="answerWA16" value="2">b.	Batas<br>
&emsp;<input type="radio" name="answerWA16" value="3">c.	Perkawinan<br>
&emsp;<input type="radio" name="answerWA16" value="4">d.	Pagar<br>
&emsp;<input type="radio" name="answerWA16" value="5">e.	Masyarakat<br>
</p>

17. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA17" value="1">a.	Mengetam<br>
&emsp;<input type="radio" name="answerWA17" value="2">b.	Memahat<br>
&emsp;<input type="radio" name="answerWA17" value="3">c.	Mengasah<br>
&emsp;<input type="radio" name="answerWA17" value="4">d.	Melicinkan<br>
&emsp;<input type="radio" name="answerWA17" value="5">e.	Menggosok<br>
</p>

18. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA18" value="1">a.	Panjang<br>
&emsp;<input type="radio" name="answerWA18" value="2">b.	Lonjong<br>
&emsp;<input type="radio" name="answerWA18" value="3">c.	Runcing<br>
&emsp;<input type="radio" name="answerWA18" value="4">d.	Bulat<br>
&emsp;<input type="radio" name="answerWA18" value="5">e.	Bersudut<br>
</p>

19. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>

&emsp;<input type="radio" name="answerWA19" value="1">a.	Kunci <br>
&emsp;<input type="radio" name="answerWA19" value="2">b.	Palang pintu <br>
&emsp;<input type="radio" name="answerWA19" value="3">c.	Gerendel <br>
&emsp;<input type="radio" name="answerWA19" value="4">d.	Gunting<br>
&emsp;<input type="radio" name="answerWA19" value="5">e.	Obeng<br>
</p>

20. Carilah satu kata yang tidak memiliki kesamaan dengan keempat kata yang lain.<br/>
&emsp;<input type="radio" name="answerWA20" value="1">a.	Batu<br>
&emsp;<input type="radio" name="answerWA20" value="2">b.	Baja <br>
&emsp;<input type="radio" name="answerWA20" value="3">c.	Bulu<br> 
&emsp;<input type="radio" name="answerWA20" value="4">d.	Kare <br>
&emsp;<input type="radio" name="answerWA20" value="5">e.	Kayu <br>
</p>



<!-- 	<div align="center">
        <a class="btn admin_btn" href="{{ route('soal_an') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitWA">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
{!! Form::close() !!}
  
@stop
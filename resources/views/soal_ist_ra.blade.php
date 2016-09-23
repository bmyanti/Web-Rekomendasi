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
 {!! Form::open(array('url' => 'ist_ra_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
                 
                 
<p>Tes berikutnya adalah soal-soal hingtungan. Jawablah dengan cepat dan benar sebelum waktu habis</p>
<p>Contoh:</p>
&emsp;1.  Sebatang Pensil Harganya 25 Rupiah. Berapakah harga 3 batang
&emsp;<p>Jawaban yang benar adalah : <b>75</b></p>
</p>

&emsp;2.  Dengan sepeda. Husin dapat menempuh 15 Km dalam waktu 1 jam. Berapa Km-kah yang dapat ia tempuh dalam waktu 4 jam ?
&emsp;<p>Jawaban yang benar adalah : <b>60</b></p>
</p>
<br><br>

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
   1.	Karena dipanaskan, awat yang panjangnya 48cm akan mengembang menjadi 52 cm. Setelah pemanasan,berapakah panjang kawat yang berukuran 75 cm ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA1', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

2.	Suatu pabrik dapat menghasilkan 304 batang pensil dalam waktu 8 jam. Berapakah yang dihasilkan dalam waktu setengah jam ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA2', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

3.	Untuk suatu campuran diperlukan bagian perak dan bagian timah. Berapa gram-kah perak yang diperlukan untuk mendapatkan campuran itu beratnya 15 gram ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA3', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

4.	Untuk setiap Rp.3,- yang dimiliki sidin, Hamid Memiliki 5,-. Jika mereka bersama mepunyai Rp. 120,-. Berapa rupiahkah yang dimiliki hamid ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA4', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

5.	Mesin A menenun 60 m Kain, Sedangkan mesin B menenun 40 m kain. Berapa meterkah yang di tenun mesin A, Jika mesin B menenun 60 m ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA5', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

6.	Seseorang memberikan 1/10 dari uangnya untuk perangko dan 4 kali jumlah itu untuk alat tulis. Sisa uang masih Rp 60,-. Berapa rupiahkah uangnya semula ?     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA6', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

7.	Dalam 2 peti terdapat 43 piring. Didalm peti yang satu tertdapat 9 buah piring lebih banyak dari pada di dalam peti yang lain. Berapa buah piring terdapat didalam peti yang lebih kecil ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA7', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

8.	Suatu lembaran kain yang panjang 60 Cm harus di bagi sedemikian rupasehingga panjangnya satu bagian adalah 2/3 dari bagian yang lain. Berapakah bagian yang terpemdek?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA8', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

9.	Suatu perusahaan mengespor ¾ dari hasil produksinya dan menjual 4/5 dari sisa itu di dalam negeri. Berapa % kah hasil produksi yang masih tnggal ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA9', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

10.	Jika suatu botol berisi anggur hanya 7/8 bagian dan harganya ialah Rp.  84,-. Berapakah harga anggur itu jika botol hanya berisi ½ penuh ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA10', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

11.	DI dalam suatu keluarga setiap anak perempuan mempunyai jumlah saudara laki-laki yang sama dengan jumlah saudara perempuan dan setiap anak laki-laki mempunyai dua kali lebih banyak saudara perempuan dari pada saudara laki-laki. Berapa anak laki-laki kah yang terdapat dalam keluarga itu ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA11', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

12.	Jika seseorang anak memiliki Rp 50,- dan memberikan Rp. 15,- berapa rupiahkah yang masih tinggal padanya ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA12', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

13.	Berapa Km-kah yang dapat di tempuh oleh kereta api dalam waktu 7 jam. Jika kecepatan 40 Km/jam ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA13', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

14.	15 peti buah-buahan beratnya 250 kg dan setiap peti kosong beratnya 3 kg, berapakah berat buah-buahan itu ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA14', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

15.	Seseorang mempunyai persediaan rumput yang cukup untuk 7 ekor kuda selama 78 hari berapa harikah persediaan itu cukup untuk 21 ekor kuda ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA15', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

16.	3 batang coklat harganya Rp 5,- Berapakah batangkah yang dapat kita beli dengan Rp. 50,- ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA16', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

17.	Seseorang dapat berjalan 1,75 m dalam waktu ¼ detik. Berapa meterkah yang dapat di tempuh dalam waktu 10 detik ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA17', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

18.	Jika sebuah batu terletak 15 m disebelah selatan dari sebatang pohon dan pohon itu berada 30 m di sebelah selatan dari sebuah rumah. Berapa meterkah jarak antara batu dan rumah itu ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA18', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

19.	Jika 4 1/5 bahan sedang harganya Rp.90,- Berapa rupiahkah harga 2 ½ ?
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA19', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

7 Orang dapat menyelesaikan suatu pekerjaan dalam 6 hari. Berapa orangkah yang diperlukan untuk menyelesaikan pekerjaan itu dalam setenga hari ? 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerRA20', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>
<!--  <div align="center">
        <a class="btn admin_btn" href="{{ route('soal_zr') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitRA">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
{!! Form::close() !!}
  
@stop
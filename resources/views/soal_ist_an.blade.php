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
 {!! Form::open(array('url' => 'ist_an_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
                 
                 
<p>Ditentukan tiga kata. Antara kata pertama dan kata kedua terdapat suatu hubungan terntentu.  Antara kata ketiga dan salah satu kata dari lima kata jawaban yang tersedia memiliki hubungan yang sama. Carilah kata itu.</p>
<p>Contoh:</p>
&emsp;1.	Hutan : Pohon = Tembok : ….. <br>
&emsp;&emsp;a.  Batu bata<br>
&emsp;&emsp;b.  Rumah<br>
&emsp;&emsp;c.  Semen<br/>
&emsp;&emsp;d.  Putih<br>
&emsp;&emsp;e.  Dinding<br>
&emsp;<p>Hubungan antara hutan dan pohon adalah bahwa hutan terdiri atas pohon-pohon, maka hubungan antara tembok dan salah satu kata pilihan adalah bahwa tembor terdiri atas batu bata. Jawaban yang benar adalah : batu bata. Oleh karena itu pada kertas jawaban, pilih jawaban <b>A. Batu bata</b></p>
</p>

&emsp;2.	Gelap : Terang = Basah : ….<br>
&emsp;&emsp;a.  Hujan<br>
&emsp;&emsp;b.  Hari<br>
&emsp;&emsp;c.  Lembab<br/>
&emsp;&emsp;d.  Angin<br>
&emsp;&emsp;e.  Kering<br>
&emsp;<p>Gelap adalah lawan kata dari terang, maka untuk basah lawan katanya adalah kering. Jawaban yang benar adalah : kering. Oleh karena itu pada kertas jawaban, pilih jawaban  <b>E. Kering</b></p>
</p>
<br><br>

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1.	Matahari : Bumi<br/>

&emsp;<input type="radio" name="answerAN1" value="1">a.	Bumi : Gravitasi<br>
&emsp;<input type="radio" name="answerAN1" value="2">b.	Bumi : Bulan<br>
&emsp;<input type="radio" name="answerAN1" value="3">c.	Buli : Pelanet<br/>
&emsp;<input type="radio" name="answerAN1" value="4">d.	Bumi : Matahari<br>
&emsp;<input type="radio" name="answerAN1" value="5">e.	Bumi : Bintang<br>
</p>

2.	Busur : Garis<br/>
&emsp;<input type="radio" name="answerAN2" value="1">a.	Terbenan : Terbit<br>
&emsp;<input type="radio" name="answerAN2" value="2">b.	Tangkap : Lempar<br>
&emsp;<input type="radio" name="answerAN2" value="3">c.	Tombak : Busur<br>
&emsp;<input type="radio" name="answerAN2" value="3">d.	Relatif : Absolut<br>
&emsp;<input type="radio" name="answerAN2" value="5">e.	Busur : Panah<br>
</p>

3.	Air : Menguap<br/>
&emsp;<input type="radio" name="answerAN3" value="1">a.	Es : Mencair<br>
&emsp;<input type="radio" name="answerAN3" value="2">b.	Panas : Memuai<br>
&emsp;<input type="radio" name="answerAN3" value="3">c.	Pena : Kartunis<br>
&emsp;<input type="radio" name="answerAN3" value="4">d.	Jatuh : Pecah<br>
&emsp;<input type="radio" name="answerAN3" value="5">e.	Laut : Mendung<br>
</p>

4.	Gambar : Pelukis<br/>
&emsp;<input type="radio" name="answerAN4" value="1">a.	Lagu : Penyanyi<br>
&emsp;<input type="radio" name="answerAN4" value="2">b.	Restoran : Koki<br>
&emsp;<input type="radio" name="answerAN4" value="3">c.	Pena : Kartunis<br>
&emsp;<input type="radio" name="answerAN4" value="4">d.	Lagu : Komponis<br>
&emsp;<input type="radio" name="answerAN4" value="5">e.	Pusi : Penyair<br>
</p>

5.	Telak : Laut<br/>

&emsp;<input type="radio" name="answerAN5" value="1">a.	Semenangjung : Daratan<br>
&emsp;<input type="radio" name="answerAN5" value="2">b.	Karang : Tanjung<br>
&emsp;<input type="radio" name="answerAN5" value="3">c.	Sepeda : Pedal<br>
&emsp;<input type="radio" name="answerAN5" value="4">d.	Kapal : Pelabuhan<br>
&emsp;<input type="radio" name="answerAN5" value="5">e.	Selat : Pulau<br>
&emsp;</p>

6.	Bunga : Taman<br/>
&emsp;<input type="radio" name="answerAN6" value="1">a.	Pohon : Ranting<br>
&emsp;<input type="radio" name="answerAN6" value="2">b.	Murid : PR <br>
&emsp;<input type="radio" name="answerAN6" value="3">c.	Dokter : Pasien<br/>
&emsp;<input type="radio" name="answerAN6" value="4">d.	Sekretaris : Komputer <br>
&emsp;<input type="radio" name="answerAN6" value="5">e.	Dosen : Universitas <br>
</p>

7.	STATESKOP : DOKTER = Osiloskop<br/>

&emsp;<input type="radio" name="answerAN7" value="1">a.	Apoteker<br>
&emsp;<input type="radio" name="answerAN7" value="2">b.	Arkeolog <br>
&emsp;<input type="radio" name="answerAN7" value="3">c.	Bakteriolog<br>
&emsp;<input type="radio" name="answerAN7" value="4">d.	Montir<br>
&emsp;<input type="radio" name="answerAN7" value="5">e.	Neurolog<br>
</p>

8.	Pilot : Pesawat<br/>
&emsp;<input type="radio" name="answerAN8" value="1">a.	Masinis : kapal<br>
&emsp;<input type="radio" name="answerAN8" value="2">b.	Kusir : kereta <br>
&emsp;<input type="radio" name="answerAN8" value="3">c.	Suhu : temperature <br>
&emsp;<input type="radio" name="answerAN8" value="4">d.	Volt : listrik<br>
&emsp;<input type="radio" name="answerAN8" value="5">e.	Kalori : Berat<br>
</p>

9.	Desibel : Suara<br/>

&emsp;<input type="radio" name="answerAN9" value="1">a.	Are : Jarak<br>
&emsp;<input type="radio" name="answerAN9" value="2">b.	Warna : Merah <br>
&emsp;<input type="radio" name="answerAN9" value="3">c.	Suhu : Temperature<br> 
&emsp;<input type="radio" name="answerAN9" value="4">d.	Volt : Listrik<br>
&emsp;<input type="radio" name="answerAN9" value="5">e.	Kalori:Berat<br>
</p>

10.	Air : Haus<br/>
&emsp;<input type="radio" name="answerAN10" value="1">a.	Angin : Panas<br>
&emsp;<input type="radio" name="answerAN10" value="2">b.	Makanan : Lapar<br>
&emsp;<input type="radio" name="answerAN10" value="3">c.	Rumput : Kambing<br>
&emsp;<input type="radio" name="answerAN10" value="4">d.	Gelap : Lampu<br>
&emsp;<input type="radio" name="answerAN10" value="5">e.	Minyak : Api<br>
</p>

11.	Seminar : Sarjana<br/>

&emsp;<input type="radio" name="answerAN11" value="1">a.	Akademi : Taruna<br> 
&emsp;<input type="radio" name="answerAN11" value="2">b.	Konservator : Seniman<br>
&emsp;<input type="radio" name="answerAN11" value="3">c.	Perpustakaan : Peneliti<br>
&emsp;<input type="radio" name="answerAN11" value="4">d.	Ruang Pengadilan : Saksi<br>
&emsp;<input type="radio" name="answerAN11" value="5">e.	Rumah Sakit : Pasien<br>
</p>

12. Bebatuan : Geologi = Benih : ….<br/>
&emsp;<input type="radio" name="answerAN12" value="1">a.	Ilmu Pengetahuan<br>
&emsp;<input type="radio" name="answerAN12" value="2">b.	Hortikultura<br>
&emsp;<input type="radio" name="answerAN12" value="3">c.	Reproduksi<br>
&emsp;<input type="radio" name="answerAN12" value="4">d.	Atom<br>
&emsp;<input type="radio" name="answerAN12" value="5">e.	Biologi<br>
</p>

13.	Kaki : Sepatu<br/>
&emsp;<input type="radio" name="answerAN13" value="1">a.	Topi : Kepala<br>
&emsp;<input type="radio" name="answerAN13" value="2">b.	Cincin : Jari<br>
&emsp;<input type="radio" name="answerAN13" value="3">c.	Telinga : Anting<br>
&emsp;<input type="radio" name="answerAN13" value="4">d.	Meja : Ruangan<br>
&emsp;<input type="radio" name="answerAN13" value="5">e.	Cat : Kuas<br>
</p>

14.	Ulat : kepompong : KupuKupu<br/>

&emsp;<input type="radio" name="answerAN14" value="1">a.	Bayi : Anak-anak : remaja<br>
&emsp;<input type="radio" name="answerAN14" value="2">b.	Ngantuk : Tidur : Mimpi<br>
&emsp;<input type="radio" name="answerAN14" value="3">c.	Kecil : Sedang : Besar<br> 
&emsp;<input type="radio" name="answerAN14" value="4">d.	Anak : Ayah : Kakek<br>
&emsp;<input type="radio" name="answerAN14" value="5">e.	Sore : Siang : Pagi<br>
</p>

15.	Murid : Buku : Perpustakaan<br/>
&emsp;<input type="radio" name="answerAN15" value="1">a.	Orang tua : Anak Ibu<br>
&emsp;<input type="radio" name="answerAN15" value="2">b.	Pembeli : makanan : Gudang<br>
&emsp;<input type="radio" name="answerAN15" value="3">c.	Anak : Kelereng : Rumah<br>
&emsp;<input type="radio" name="answerAN15" value="4">d.	Makan : Nasi : Meja<br>
&emsp;<input type="radio" name="answerAN15" value="5">e.	Nasabah : Uang : Bank<br>
</p>

16.	Kuda:Daku : Duka<br/>

&emsp;<input type="radio" name="answerAN16" value="1">a.	Kaki : Kaka : Kuku<br>
&emsp;<input type="radio" name="answerAN16" value="2">b.	Nadi : Dina : Dani<br>
&emsp;<input type="radio" name="answerAN16" value="3">c.	Papi : Papa : Pipa<br>
&emsp;<input type="radio" name="answerAN16" value="4">d.	Buka : Baki : Kaka<br>
&emsp;<input type="radio" name="answerAN16" value="5">e.	Dada : Didi : Dadu<br>
</p>

17.	Api : Bakar : Panas<br/>
&emsp;<input type="radio" name="answerAN17" value="1">a.	Air : Lembab : dingin<br>
&emsp;<input type="radio" name="answerAN17" value="2">b.	Udara : Segar : Hangat<br>
&emsp;<input type="radio" name="answerAN17" value="3">c.	Besi : Panas : Memuai<br>
&emsp;<input type="radio" name="answerAN17" value="4">d.	Kayu : Keras : Panjang<br>
&emsp;<input type="radio" name="answerAN17" value="5">e.	Es : Beku : Dingin<br>
</p>

18.	Insentif : Prestasi<br/>
&emsp;<input type="radio" name="answerAN18" value="1">a.	Hadiah : Pengabdian<br>
&emsp;<input type="radio" name="answerAN18" value="2">b.	Penghormatan : Kepribadian<br>
&emsp;<input type="radio" name="answerAN18" value="3">c.	Hak : Kewajiban<br>
&emsp;<input type="radio" name="answerAN18" value="4">d.	Kebutuhan : Pemenuhan Kebutuhan<br>
&emsp;<input type="radio" name="answerAN18" value="5">e.	Motivasi : Kerja<br>
</p>

19.	Ramalan : Astrologi = Bangsa : ….<br/>

&emsp;<input type="radio" name="answerAN19" value="1">a.	Sosiologi<br>
&emsp;<input type="radio" name="answerAN19" value="2">b.	Demografi<br>
&emsp;<input type="radio" name="answerAN19" value="3">c.	Psikologi <br>
&emsp;<input type="radio" name="answerAN19" value="4">d.	Antropologi<br>
</p>

20.	Dongeng : Peristiwa<br/>
&emsp;<input type="radio" name="answerAN20" value="1">a.	Fiktif  : Fakta<br>
&emsp;<input type="radio" name="answerAN20" value="2">b.	Data : Ramalan <br>
&emsp;<input type="radio" name="answerAN20" value="3">c.	Tesis : Anti tesis<br> 
&emsp;<input type="radio" name="answerAN20" value="4">d.	Rencana : Proyeksi<br>
&emsp;<input type="radio" name="answerAN20" value="5">e.	Dugaan : Hipotesis<br>
</p>



<!-- 	<div align="center">
        <a class="btn admin_btn" href="{{ route('soal_ge') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitAN">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
{!! Form::close() !!}
  
@stop
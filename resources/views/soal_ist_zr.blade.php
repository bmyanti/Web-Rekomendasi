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
 {!! Form::open(array('url' => 'ist_zr_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">
<p>Pada test berikut akan diberikan deret angka. Setiap deret tersusun menurut suatu pola tertentu dan dapat dilanjutkan menurut pola tersebut. Carilah angka berikutnya yang benar untuk setiap deret, dan tulis jawaban saudara pada kotak yang telah disediakan.</p>
<p>Contoh:</p>
&emsp;1.  2 4 6 8 10  12  14 ?
&emsp;<p>Pada deret ini angka berikutnya selalu didap jika angka didepannya di tambah dengan 2. jawabannya adalah  : <b>16</b></p>
</p>

&emsp;2.  9 7 10  8 11  9   12
&emsp;<p>Pada deret ini polanya berganti-ganti harus dikurangi dengan 2 dan setelah itu ditambah dengan 3. Jawabannya adalah : <b>10</b></p>
</p>
<br><br>
<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1.	94	92	46 	44	22	10 
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR1', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

2.	5	8	9	8	11	12
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR2', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

3.	12	15	19	23	28	33	39
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR3', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

4.	7	5	10	7	21	17	68
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR4', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

5.	11	15	18	9	13	16	8
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR5', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

6.	3	8	15	24	35	48	63
 <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR6', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

7.	4	5	7	4	8	13	7
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR7', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

8.	8	5	15	18	6	3	9
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR8', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

9.	15	6	18	10	30	23	69
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR9', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

10.	5	35	28	4	11	77	70
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR10', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

11.	6	9	12	15	18	21	24
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR11', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

12.	15	16	18	19	21	22	24
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR12', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

13.	19	10	22	21	25	24	28
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR13', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

14.	15	12	17	13	18	14	19
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR14', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

15.	2	4	8	10	20	22	44
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR15', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

16.	16	13	16	12	17	11	18
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR16', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

17.	25	22	11	33	30	15	45
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR17', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

18.	49	51	54	27	9 	11	14
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR18', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

19.	2	3	1	3	4	2	4
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR19', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>

20.	19	17	20	16	21	15	22
     <div class="form-group">
     <div class="col-sm-2">
     {!! Form::text('answerZR20', null, 
        array('class'=>'form-control', 
              'placeholder'=>'')) !!}
</div>
</div>
</p>



<!-- 	<div align="center">
        <a class="btn admin_btn" href="{{ route('soal_fa') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitZR">

                            </div>
                        </div>
                  </ul>
                </div>
</form>
{!! Form::close() !!}
  
@stop
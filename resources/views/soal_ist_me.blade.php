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
 {!! Form::open(array('url' => 'ist_soal_me', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">

<div class="form-group">

<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
1.  Kata yang mempunyai huruf permulaan Z adalah suatu….<br/>

&emsp;<input type="radio" name="answerME1" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME1" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME1" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME1" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME1" value="5">e. Hewan<br>
</p>

2.  Kata yang empunyai huruf permulaan A adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME2" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME2" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME2" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME2" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME2" value="5">e. Hewan<br>
</p>

3.  Kata yang mempunyai huruf permulaan C adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME3" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME3" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME3" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME3" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME3" value="5">e. Hewan<br>
</p>

4.  Kata yang empunyai huruf permulaan M adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME4" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME4" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME4" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME4" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME4" value="5">e. Hewan<br>
</p>

5.  Kata yang empunyai huruf permulaan P adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME5" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME5" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME5" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME5" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME5" value="5">e. Hewan<br>
&emsp;</p>

6.  Kata yang empunyai huruf permulaan H adalah suatu ….<br/>
&emsp;<input type="radio" name="answerME6" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME6" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME6" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME6" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME6" value="5">e. Hewan<br>
</p>

7.  Kata yang empunyai huruf permulaan U adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME7" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME7" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME7" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME7" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME7" value="5">e. Hewan<br>
</p>

8.  Kata yang empunyai huruf permulaan E adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME8" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME8" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME8" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME8" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME8" value="5">e. Hewan<br>
</p>

9.  Kata yang empunyai huruf permulaan L adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME9" value="1">a. Bunga<br>
&emsp;<input type="radio" name="answerME9" value="2">b. Perkakas<br>
&emsp;<input type="radio" name="answerME9" value="3">c. Negara<br/>
&emsp;<input type="radio" name="answerME9" value="4">d. Kesenian<br>
&emsp;<input type="radio" name="answerME9" value="5">e. Hewan<br>
</p>

10. Kata yang empunyai huruf permulaan S adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME10" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME10" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME10" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME10" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME10" value="5">e.  Hewan<br>
</p>

11. Kata yang empunyai huruf permulaan K adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME11" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME11" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME11" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME11" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME11" value="5">e.  Hewan<br>
</p>

12. Kata yang empunyai huruf permulaan B adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME12" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME12" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME12" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME12" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME12" value="5">e.  Hewan<br>
</p>

13. Kata yang empunyai huruf permulaan f adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME13" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME13" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME13" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME13" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME13" value="5">e.  Hewan<br>
</p>

14. Kata yang empunyai huruf permulaan O adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME14" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME14" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME14" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME14" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME14" value="5">e.  Hewan<br>
</p>

15. Kata yang empunyai huruf permulaan T adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME15" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME15" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME15" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME15" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME15" value="5">e.  Hewan<br>
</p>

16. Kata yang empunyai huruf permulaan J adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME16" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME16" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME16" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME16" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME16" value="5">e.  Hewan<br>
</p>

17. Kata yang empunyai huruf permulaan Y adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME17" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME17" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME17" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME17" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME17" value="5">e.  Hewan<br>
</p>

18. Kata yang empunyai huruf permulaan D adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME18" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME18" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME18" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME18" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME18" value="5">e.  Hewan<br>
</p>

19. Kata yang empunyai huruf permulaan I adalah suatu …..<br/>

&emsp;<input type="radio" name="answerME19" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME19" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME19" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME19" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME19" value="5">e.  Hewan<br>
</p>

20. Kata yang empunyai huruf permulaan W adalah suatu …..<br/>
&emsp;<input type="radio" name="answerME20" value="1">a.  Bunga<br>
&emsp;<input type="radio" name="answerME20" value="2">b.  Perkakas<br>
&emsp;<input type="radio" name="answerME20" value="3">c.  Negara<br/>
&emsp;<input type="radio" name="answerME20" value="4">d.  Kesenian<br>
&emsp;<input type="radio" name="answerME20" value="5">e.  Hewan<br>



<!--  <div align="center">
        <a class="btn admin_btn" href="{{ route('soal_wa') }}" align=""><h3>Next</h3></a>
    </div> -->
 <input class="btn" type="submit" value="Next" name="submitME">

                            </div>
                        </div>
                  </ul>
                </div>
</form>

<script>    
    setTimeout(function() {
    document.querySelector('[name="submitME"]').click();
}, 60000);
</script>

<script type="text/javascript">
// set minutes
var mins = 1;
 
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
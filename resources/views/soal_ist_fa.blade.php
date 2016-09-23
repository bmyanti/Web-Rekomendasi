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
 {!! Form::open(array('url' => 'ist_fa_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">
<div class="col-xs-10">
                  <ul class="list-unstyled">

<style type="text/css">
	.block {
 
    width: 350px;
    height: 150px;
	}
	
</style>

     <div align="center">
                    
                <h1>Soal IST</h1>
              
                </div>
<div>

	    <div>
	                    <h3>Soal no.1-7 adalah soal padanan hubungan gambar.</h3>
        <img src="{{ asset('/Pictures/Soal/1.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA1" value="1">
 		 <img src="{{ asset('/Pictures/Soal/1a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA1" value="2">
 		 <img src="{{ asset('/Pictures/Soal/1b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA1" value="3">
 		 <img src="{{ asset('/Pictures/Soal/1c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA1" value="4">
 		 <img src="{{ asset('/Pictures/Soal/1d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA1" value="5">
 		 <img src="{{ asset('/Pictures/Soal/1e.png') }}" class="img-responsive">
		</div>
    </div>
   
   <div>
        <img src="{{ asset('/Pictures/Soal/2.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA2" value="1">
 		 <img src="{{ asset('/Pictures/Soal/2a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA2" value="2">
 		 <img src="{{ asset('/Pictures/Soal/2b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA2" value="3">
 		 <img src="{{ asset('/Pictures/Soal/2c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA2" value="4">
 		 <img src="{{ asset('/Pictures/Soal/2d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA2" value="5">
 		 <img src="{{ asset('/Pictures/Soal/2e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/3.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA3" value="1">
 		 <img src="{{ asset('/Pictures/Soal/3a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA3" value="2">
 		 <img src="{{ asset('/Pictures/Soal/3b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA3" value="3">
 		 <img src="{{ asset('/Pictures/Soal/3c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA3" value="4">
 		 <img src="{{ asset('/Pictures/Soal/3d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA3" value="5">
 		 <img src="{{ asset('/Pictures/Soal/3e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/4.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA4" value="1">
 		 <img src="{{ asset('/Pictures/Soal/4a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA4" value="2">
 		 <img src="{{ asset('/Pictures/Soal/4b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA4" value="3">
 		 <img src="{{ asset('/Pictures/Soal/4c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA4" value="4">
 		 <img src="{{ asset('/Pictures/Soal/4d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA4" value="5">
 		 <img src="{{ asset('/Pictures/Soal/4e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/5.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA5" value="1">
 		 <img src="{{ asset('/Pictures/Soal/5a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA5" value="2">
 		 <img src="{{ asset('/Pictures/Soal/5b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA5" value="3">
 		 <img src="{{ asset('/Pictures/Soal/5c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA5" value="4">
 		 <img src="{{ asset('/Pictures/Soal/5d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA5" value="5">
 		 <img src="{{ asset('/Pictures/Soal/5e.png') }}" class="img-responsive">
		</div>
    </div>

    
      <div>
        <img src="{{ asset('/Pictures/Soal/6.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA6" value="1">
 		 <img src="{{ asset('/Pictures/Soal/6a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA6" value="2">
 		 <img src="{{ asset('/Pictures/Soal/6b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA6" value="3">
 		 <img src="{{ asset('/Pictures/Soal/6c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA6" value="4">
 		 <img src="{{ asset('/Pictures/Soal/6d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA6" value="5">
 		 <img src="{{ asset('/Pictures/Soal/6e.png') }}" class="img-responsive">
		</div>
    </div>
   
   <div>
        <img src="{{ asset('/Pictures/Soal/7.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA7" value="1">
 		 <img src="{{ asset('/Pictures/Soal/7a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA7" value="2">
 		 <img src="{{ asset('/Pictures/Soal/7b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA7" value="3">
 		 <img src="{{ asset('/Pictures/Soal/7c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA7" value="4">
 		 <img src="{{ asset('/Pictures/Soal/7d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA7" value="5">
 		 <img src="{{ asset('/Pictures/Soal/7e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
                    <h3>Soal nomor 8 sampai 16 adalah seri gambar. Carilah seri 
gambar berikutnya...</h3>
        <img src="{{ asset('/Pictures/Soal/8.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA8" value="1">
 		 <img src="{{ asset('/Pictures/Soal/8a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA8" value="2">
 		 <img src="{{ asset('/Pictures/Soal/8b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA8" value="3">
 		 <img src="{{ asset('/Pictures/Soal/8c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA8" value="4">
 		 <img src="{{ asset('/Pictures/Soal/8d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA8" value="5">
 		 <img src="{{ asset('/Pictures/Soal/8e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/9.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA9" value="1">
 		 <img src="{{ asset('/Pictures/Soal/9a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA9" value="2">
 		 <img src="{{ asset('/Pictures/Soal/9b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA9" value="3">
 		 <img src="{{ asset('/Pictures/Soal/9c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA9" value="4">
 		 <img src="{{ asset('/Pictures/Soal/9d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA9" value="5">
 		 <img src="{{ asset('/Pictures/Soal/9e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/10.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA10" value="1">
 		 <img src="{{ asset('/Pictures/Soal/10a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA10" value="2">
 		 <img src="{{ asset('/Pictures/Soal/10b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA10" value="3">
 		 <img src="{{ asset('/Pictures/Soal/10c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA10" value="4">
 		 <img src="{{ asset('/Pictures/Soal/10d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA10" value="5">
 		 <img src="{{ asset('/Pictures/Soal/10e.png') }}" class="img-responsive">
		</div>
    </div>


     <div>
        <img src="{{ asset('/Pictures/Soal/11.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA11" value="1">
 		 <img src="{{ asset('/Pictures/Soal/11a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA11" value="2">
 		 <img src="{{ asset('/Pictures/Soal/11b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA11" value="3">
 		 <img src="{{ asset('/Pictures/Soal/11c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA11" value="4">
 		 <img src="{{ asset('/Pictures/Soal/11d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA11" value="5">
 		 <img src="{{ asset('/Pictures/Soal/11e.png') }}" class="img-responsive">
		</div>
    </div>

   
   <div>
        <img src="{{ asset('/Pictures/Soal/12.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA12" value="1">
 		 <img src="{{ asset('/Pictures/Soal/12a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA12" value="2">
 		 <img src="{{ asset('/Pictures/Soal/12b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA12" value="3">
 		 <img src="{{ asset('/Pictures/Soal/12c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA12" value="4">
 		 <img src="{{ asset('/Pictures/Soal/12d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA12" value="5">
 		 <img src="{{ asset('/Pictures/Soal/12e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/13.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA13" value="1">
 		 <img src="{{ asset('/Pictures/Soal/13a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA13" value="2">
 		 <img src="{{ asset('/Pictures/Soal/13b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA13" value="3">
 		 <img src="{{ asset('/Pictures/Soal/13c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA13" value="4">
 		 <img src="{{ asset('/Pictures/Soal/13d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA13" value="5">
 		 <img src="{{ asset('/Pictures/Soal/13e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/14.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA14" value="1">
 		 <img src="{{ asset('/Pictures/Soal/14a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA14" value="2">
 		 <img src="{{ asset('/Pictures/Soal/14b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA14" value="3">
 		 <img src="{{ asset('/Pictures/Soal/14c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA14" value="4">
 		 <img src="{{ asset('/Pictures/Soal/14d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA14" value="5">
 		 <img src="{{ asset('/Pictures/Soal/14e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/15.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA15" value="1">
 		 <img src="{{ asset('/Pictures/Soal/15a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA15" value="2">
 		 <img src="{{ asset('/Pictures/Soal/15b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA15" value="3">
 		 <img src="{{ asset('/Pictures/Soal/15c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA15" value="4">
 		 <img src="{{ asset('/Pictures/Soal/15d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA15" value="5">
 		 <img src="{{ asset('/Pictures/Soal/15e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/16.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA16" value="1">
 		 <img src="{{ asset('/Pictures/Soal/16a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA16" value="2">
 		 <img src="{{ asset('/Pictures/Soal/16b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA16" value="3">
 		 <img src="{{ asset('/Pictures/Soal/16c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA16" value="4">
 		 <img src="{{ asset('/Pictures/Soal/16d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA16" value="5">
 		 <img src="{{ asset('/Pictures/Soal/16e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
<h3>     Untuk soal no.17 sampai 20, Carilah gambar yang bukan 
dari kelompoknya… </h3>
        <img src="{{ asset('/Pictures/Soal/17.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA17" value="1">
 		 <img src="{{ asset('/Pictures/Soal/17a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA17" value="2">
 		 <img src="{{ asset('/Pictures/Soal/17b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA17" value="3">
 		 <img src="{{ asset('/Pictures/Soal/17c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA17" value="4">
 		 <img src="{{ asset('/Pictures/Soal/17d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA17" value="5">
 		 <img src="{{ asset('/Pictures/Soal/17e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/18.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA18" value="1">
 		 <img src="{{ asset('/Pictures/Soal/18a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA18" value="2">
 		 <img src="{{ asset('/Pictures/Soal/18b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA18" value="3">
 		 <img src="{{ asset('/Pictures/Soal/18c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA18" value="4">
 		 <img src="{{ asset('/Pictures/Soal/18d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA18" value="5">
 		 <img src="{{ asset('/Pictures/Soal/18e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/19.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA19" value="1">
 		 <img src="{{ asset('/Pictures/Soal/19a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA19" value="2">
 		 <img src="{{ asset('/Pictures/Soal/19b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA19" value="3">
 		 <img src="{{ asset('/Pictures/Soal/19c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA19" value="4">
 		 <img src="{{ asset('/Pictures/Soal/19d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA19" value="5">
 		 <img src="{{ asset('/Pictures/Soal/19e.png') }}" class="img-responsive">
		</div>
    </div>


     <div>

        <img src="{{ asset('/Pictures/Soal/20.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerFA20" value="1">
 		 <img src="{{ asset('/Pictures/Soal/20a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA20" value="2">
 		 <img src="{{ asset('/Pictures/Soal/20b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA20" value="3">
 		 <img src="{{ asset('/Pictures/Soal/20c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA20" value="4">
 		 <img src="{{ asset('/Pictures/Soal/20d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerFA20" value="5">
 		 <img src="{{ asset('/Pictures/Soal/20e.png') }}" class="img-responsive">
		</div>
    </div>


<input class="btn" type="submit" value="Next" name="submitFA">
</div>

{!! Form::close() !!}
  
@stop
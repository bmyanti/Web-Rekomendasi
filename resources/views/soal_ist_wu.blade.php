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
 {!! Form::open(array('url' => 'ist_wu_soal', 'class' => 'form-horizontal')) !!}
    <form action="php-forms-get-post-checkbox-radio-data.php" method="post">


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
          <h3>     Untuk soal no 1 sampai 10, Carilah gambar yang bukan 
dari kelompoknya… </h3>
     <h1>1</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU1" value="1">
 		 <img src="{{ asset('/Pictures/Soal/21a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU1" value="2">
 		 <img src="{{ asset('/Pictures/Soal/21b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU1" value="3">
 		 <img src="{{ asset('/Pictures/Soal/21c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU1" value="4">
 		 <img src="{{ asset('/Pictures/Soal/21d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU1" value="5">
 		 <img src="{{ asset('/Pictures/Soal/21e.png') }}" class="img-responsive">
		</div>
    </div>
   
   <div>
     <h1>2</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU2" value="1">
 		 <img src="{{ asset('/Pictures/Soal/22a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU2" value="2">
 		 <img src="{{ asset('/Pictures/Soal/22b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU2" value="3">
 		 <img src="{{ asset('/Pictures/Soal/22c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU2" value="4">
 		 <img src="{{ asset('/Pictures/Soal/22d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU2" value="5">
 		 <img src="{{ asset('/Pictures/Soal/22e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>3</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU3" value="1">
 		 <img src="{{ asset('/Pictures/Soal/23a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU3" value="2">
 		 <img src="{{ asset('/Pictures/Soal/23b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU3" value="3">
 		 <img src="{{ asset('/Pictures/Soal/23c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU3" value="4">
 		 <img src="{{ asset('/Pictures/Soal/23d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU3" value="5">
 		 <img src="{{ asset('/Pictures/Soal/23e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>4</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU4" value="1">
 		 <img src="{{ asset('/Pictures/Soal/24a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU4" value="2">
 		 <img src="{{ asset('/Pictures/Soal/24b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU4" value="3">
 		 <img src="{{ asset('/Pictures/Soal/24c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU4" value="4">
 		 <img src="{{ asset('/Pictures/Soal/24d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU4" value="5">
 		 <img src="{{ asset('/Pictures/Soal/24e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>5</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU5" value="1">
 		 <img src="{{ asset('/Pictures/Soal/25a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU5" value="2">
 		 <img src="{{ asset('/Pictures/Soal/25b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU5" value="3">
 		 <img src="{{ asset('/Pictures/Soal/25c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU5" value="4">
 		 <img src="{{ asset('/Pictures/Soal/25d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU5" value="5">
 		 <img src="{{ asset('/Pictures/Soal/25e.png') }}" class="img-responsive">
		</div>
    </div>

    
      <div>
     <h1>6</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU6" value="1">
 		 <img src="{{ asset('/Pictures/Soal/26a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU6" value="2">
 		 <img src="{{ asset('/Pictures/Soal/26b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU6" value="3">
 		 <img src="{{ asset('/Pictures/Soal/26c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU6" value="4">
 		 <img src="{{ asset('/Pictures/Soal/26d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU6" value="5">
 		 <img src="{{ asset('/Pictures/Soal/26e.png') }}" class="img-responsive">
		</div>
    </div>
   
   <div>
     <h1>7</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU7" value="1">
 		 <img src="{{ asset('/Pictures/Soal/27a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU7" value="2">
 		 <img src="{{ asset('/Pictures/Soal/27b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU7" value="3">
 		 <img src="{{ asset('/Pictures/Soal/27c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU7" value="4">
 		 <img src="{{ asset('/Pictures/Soal/27d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU7" value="5">
 		 <img src="{{ asset('/Pictures/Soal/27e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>8</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU8" value="1">
 		 <img src="{{ asset('/Pictures/Soal/28a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU8" value="2">
 		 <img src="{{ asset('/Pictures/Soal/28b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU8" value="3">
 		 <img src="{{ asset('/Pictures/Soal/28c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU8" value="4">
 		 <img src="{{ asset('/Pictures/Soal/28d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU8" value="5">
 		 <img src="{{ asset('/Pictures/Soal/28e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>9</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU9" value="1">
 		 <img src="{{ asset('/Pictures/Soal/29a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU9" value="2">
 		 <img src="{{ asset('/Pictures/Soal/29b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU9" value="3">
 		 <img src="{{ asset('/Pictures/Soal/29c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU9" value="4">
 		 <img src="{{ asset('/Pictures/Soal/29d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU9" value="5">
 		 <img src="{{ asset('/Pictures/Soal/29e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
     <h1>10</h1>
          <div class="radio-inline">
 		 <input type="radio" name="answerWU10" value="1">
 		 <img src="{{ asset('/Pictures/Soal/30a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU10" value="2">
 		 <img src="{{ asset('/Pictures/Soal/30b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU10" value="3">
 		 <img src="{{ asset('/Pictures/Soal/30c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU10" value="4">
 		 <img src="{{ asset('/Pictures/Soal/30d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU10" value="5">
 		 <img src="{{ asset('/Pictures/Soal/30e.png') }}" class="img-responsive">
		</div>
    </div>


     <div><h3>Soal no.11 sampai dengan 14, anda diminta mencari 
     bayangan cerminnya.</h3>
        <img src="{{ asset('/Pictures/Soal/31.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU11" value="1">
 		 <img src="{{ asset('/Pictures/Soal/31a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU11" value="2">
 		 <img src="{{ asset('/Pictures/Soal/31b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU11" value="3">
 		 <img src="{{ asset('/Pictures/Soal/31c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU11" value="4">
 		 <img src="{{ asset('/Pictures/Soal/31d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU11" value="5">
 		 <img src="{{ asset('/Pictures/Soal/31e.png') }}" class="img-responsive">
		</div>
    </div>
   
   <div>
        <img src="{{ asset('/Pictures/Soal/32-soal.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU12" value="1">
 		 <img src="{{ asset('/Pictures/Soal/12a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU12" value="2">
 		 <img src="{{ asset('/Pictures/Soal/32b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU12" value="3">
 		 <img src="{{ asset('/Pictures/Soal/32c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU12" value="4">
 		 <img src="{{ asset('/Pictures/Soal/32d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU12" value="5">
 		 <img src="{{ asset('/Pictures/Soal/32e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/33.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU13" value="1">
 		 <img src="{{ asset('/Pictures/Soal/33a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU13" value="2">
 		 <img src="{{ asset('/Pictures/Soal/33b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU13" value="3">
 		 <img src="{{ asset('/Pictures/Soal/33c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU13" value="4">
 		 <img src="{{ asset('/Pictures/Soal/33d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU13" value="5">
 		 <img src="{{ asset('/Pictures/Soal/33e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/34-soal.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU14" value="1">
 		 <img src="{{ asset('/Pictures/Soal/34a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU14" value="2">
 		 <img src="{{ asset('/Pictures/Soal/34b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU14" value="3">
 		 <img src="{{ asset('/Pictures/Soal/34c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU14" value="4">
 		 <img src="{{ asset('/Pictures/Soal/34d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU14" value="5">
 		 <img src="{{ asset('/Pictures/Soal/34e.png') }}" class="img-responsive">
		</div>
    </div>

    <div>
        <img src="{{ asset('/Pictures/Soal/35.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU15" value="1">
 		 <img src="{{ asset('/Pictures/Soal/35a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU15" value="2">
 		 <img src="{{ asset('/Pictures/Soal/35b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU15" value="3">
 		 <img src="{{ asset('/Pictures/Soal/35c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU15" value="4">
 		 <img src="{{ asset('/Pictures/Soal/35d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU15" value="5">
 		 <img src="{{ asset('/Pictures/Soal/35e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/36.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU16" value="1">
 		 <img src="{{ asset('/Pictures/Soal/36a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU16" value="2">
 		 <img src="{{ asset('/Pictures/Soal/36b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU16" value="3">
 		 <img src="{{ asset('/Pictures/Soal/36c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU16" value="4">
 		 <img src="{{ asset('/Pictures/Soal/36d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU16" value="5">
 		 <img src="{{ asset('/Pictures/Soal/36e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/37.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU17" value="1">
 		 <img src="{{ asset('/Pictures/Soal/37a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU17" value="2">
 		 <img src="{{ asset('/Pictures/Soal/37b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU17" value="3">
 		 <img src="{{ asset('/Pictures/Soal/37c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU17" value="4">
 		 <img src="{{ asset('/Pictures/Soal/37d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU17" value="5">
 		 <img src="{{ asset('/Pictures/Soal/37e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/38.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU18" value="1">
 		 <img src="{{ asset('/Pictures/Soal/38a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU18" value="2">
 		 <img src="{{ asset('/Pictures/Soal/38b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU18" value="3">
 		 <img src="{{ asset('/Pictures/Soal/38c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU18" value="4">
 		 <img src="{{ asset('/Pictures/Soal/38d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU18" value="5">
 		 <img src="{{ asset('/Pictures/Soal/38e.png') }}" class="img-responsive">
		</div>
    </div>

         <div>
        <img src="{{ asset('/Pictures/Soal/37.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU19" value="1">
 		 <img src="{{ asset('/Pictures/Soal/37a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU19" value="2">
 		 <img src="{{ asset('/Pictures/Soal/37b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU19" value="3">
 		 <img src="{{ asset('/Pictures/Soal/37c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU19" value="4">
 		 <img src="{{ asset('/Pictures/Soal/37d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU19" value="5">
 		 <img src="{{ asset('/Pictures/Soal/37e.png') }}" class="img-responsive">
		</div>
    </div>

     <div>
        <img src="{{ asset('/Pictures/Soal/38.png') }}" class="img-responsive">
          <div class="radio-inline">
 		 <input type="radio" name="answerWU20" value="1">
 		 <img src="{{ asset('/Pictures/Soal/38a.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU20" value="2">
 		 <img src="{{ asset('/Pictures/Soal/38b.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU20" value="3">
 		 <img src="{{ asset('/Pictures/Soal/38c.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU20" value="4">
 		 <img src="{{ asset('/Pictures/Soal/38d.png') }}" class="img-responsive">
		</div>
		 <div class="radio-inline">
 		 <input type="radio" name="answerWU20" value="5">
 		 <img src="{{ asset('/Pictures/Soal/38e.png') }}" class="img-responsive">
		</div>
    </div>

    <input class="btn" type="submit" value="Next" name="submitWU">
</div>


{!! Form::close() !!}
  
@stop
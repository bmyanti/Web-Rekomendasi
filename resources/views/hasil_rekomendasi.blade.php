@extends('head')

@section('content')
<div class="form-group">
   <div class="col-sm-10" style="padding-top: 5px;">
     <div align="center">
                    
               
               <?php 
               $data = array();
               $current = array();
               $rekom = array();
               $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
                    $bio = DB::table('user')->select('rekomendasi','no_induk','nama','asal_sekolah')->where('user_id',$get_user_id)->get();
           $tot_ist = DB::table('user')->select('rekomendasi')->where('user_id','=',$get_user_id)->first();

            $splittedstringIST=explode(",",$tot_ist->rekomendasi);
            foreach ($splittedstringIST as $key => $value) {
                array_push($rekom, $value);
            }    
            
           ?>

 @foreach ($bio as $key => $bios)

  
    <h3>Nomor Induk:        {{$bios->no_induk}}</h4>
      <br><br>
                 <h3>Nama Lengkap:      {{$bios->nama}}</h3>
                   <br><br>
                 <h3>Asal Sekolah:      {{$bios->asal_sekolah}}</h3>
                   <br><br>
                  
                   </h3><br>
                   <h4>Berikut adalah rekomendasi program studi di STMIK-STIE Mikroskil yang sesuai, berdasarkan hasil test
                 anda dan disusun dari yang paling direkomendasikan:</h4>    
                  @foreach ($rekom as $key1 => $rek)

<div align="left">
<h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
{{$key1+1}}.{{$rek}}</h3>
                   @endforeach
                   </div>
 
@endforeach
<div align="center">
        <a class="btn admin_btn" href="{{ route('welcome') }}" align=""><h3>Back to Home</h3></a>
    </div>
</div>
</div>
    <div>
    
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57ad4fbc38f9be3f"></script>  
</div>

    
@stop
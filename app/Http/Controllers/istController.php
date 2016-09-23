<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNonActiveRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

use DB;
use App\hasil_ist;
use Illuminate\Support\Facades\Input;
use Validator;
class istController extends Controller { 


function finishSE() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
    //$ansSE1 = array("3", "4", "4","5", "1", "1","2", "5", "3","2", "5", "3","4", "4", "4","2", "3", "1","5","2");
    $ansSE1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");

    $all = array();

    $ket = array("SR","R","S","T","ST");
    
    $postNameArrSE = array('answerSE1', 'answerSE2', 'answerSE3','answerSE4', 'answerSE5', 'answerSE6', 'answerSE7', 'answerSE8',
        'answerSE9', 'answerSE10','answerSE11', 'answerSE12', 'answerSE13','answerSE14', 'answerSE15','answerSE16', 'answerSE17', 'answerSE18',
        'answerSE19', 'answerSE20');

    if(isset($_POST['submitSE'])) {
         $user_favorites = DB::table('ujian_ist')->where('id_user', '=', $get_user_id)->first();

if (is_null($user_favorites)) {
    // It does not exist - add to favorites button will show
    $art = new hasil_ist;
       
         $art->id_user=$get_user_id;
         $art->bobot_se=istController::getCheckedValue43($ansSE1,$postNameArrSE);;
         $art->bobot_wa;
         $art->bobot_an;
         $art->bobot_ge;
         $art->bobot_me;
         $art->bobot_ra;
         $art->bobot_zr;
         $art->bobot_fa;
         $art->bobot_wu;
         $art->ncf;
         $art->keterangan;
         $art->created_at;
         $art->updated_at;
        $art->save();
}
    }
     //return redirect('inputdataun')->withErrors($validator);
    /*return Redirect::back()
        ->withErrors("Tidak Bisa Lagi");*/

     return view('soal_ist_wa');
    
  }   

function finishWA() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
    //$ansWA1 = array("3", "3", "4","2", "1", "2","2", "4", "3","3", "5", "1","1", "2", "4","5", "2", "5","4","3");
     $ansWA1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");
    
    $all = array();

    $ket = array("SR","R","S","T","ST");
    
   $postNameArrWA = array('answerWA1', 'answerWA2', 'answerWA3', 'answerWA4', 'answerWA5','answerWA6', 'answerWA7', 'answerWA8', 'answerWA9', 'answerWA10',
        'answerWA11', 'answerWA12', 'answerWA13', 'answerWA14', 'answerWA15','answerWA16', 'answerWA17', 'answerWA18', 'answerWA19', 'answerWA20');

         
    if(isset($_POST['submitWA'])) 
    {
        
    DB::table('ujian_ist')
        ->where('id_user', $get_user_id) 
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_wa' => istController::getCheckedValue43($ansWA1,$postNameArrWA)));  // update the record in the DB. 

       /* DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );*/
    }   
    return view('soal_ist_an');
  } 

  function finishAN() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
   //$ansAN1 = array("2", "5", "1","4", "1", "5","4", "5", "4","2", "3", "2","3", "1", "2","2", "5", "1","2","1");
     $ansAN1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");
    $all = array();

    $ket = array("SR","R","S","T","ST");
    
   $postNameArrAN = array('answerAN1', 'answerAN2', 'answerAN3', 'answerAN4', 'answerAN5','answerAN6', 'answerAN7', 'answerAN8', 'answerAN9', 'answerAN10',
        'answerAN11', 'answerAN12', 'answerAN13', 'answerAN14', 'answerAN15','answerAN16', 'answerAN17', 'answerAN18', 'answerAN19', 'answerAN20');

    if(isset($_POST['submitAN'])) 
    {
        
  DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_an' => istController::getCheckedValue43($ansAN1,$postNameArrAN)));  // update the record in the DB. 

    }  
    return view('soal_ist_ge');
  } 

  function finishGE() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
   //$ansGE1 = array("3", "3", "4","2", "1", "2","2", "4", "3","3", "5", "1","1", "2", "4","5", "2", "5","4","3");
     $ansGE1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");

    $all = array();

    $ket = array("SR","R","S","T","ST");
    
   $postNameArrGE = array('answerGE1', 'answerGE2', 'answerGE3', 'answerGE4', 'answerGE5','answerGE6', 'answerGE7', 'answerGE8', 'answerGE9', 'answerGE10',
        'answerGE11', 'answerGE12', 'answerGE13', 'answerGE14', 'answerGE15','answerGE16', 'answerGE17', 'answerGE18', 'answerGE19', 'answerGE20');

     if(isset($_POST['submitGE'])) 
    {
        
   DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_ge' => istController::getCheckedValue43($ansGE1,$postNameArrGE)));  // update the record in the DB. 
    } 
    return view('soal_ist_ra'); 
  } 

  function finishRA() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
  //$ansRAall = array("76", "19", "6","75", "90", "120","13", "20", "5","48", "3", "35","280", "205", "26","30", "70", "45","50","84");
  $ansRAall = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");
    $all = array();

    $ket = array("SR","R","S","T","ST");
    
    $answerRA1=Input::get('answerRA1');
    $answerRA2=Input::get('answerRA2');
    $answerRA3=Input::get('answerRA3');
    $answerRA4=Input::get('answerRA4');
    $answerRA5=Input::get('answerRA5');
    $answerRA6=Input::get('answerRA6');
    $answerRA7=Input::get('answerRA7');
    $answerRA8=Input::get('answerRA8');
    $answerRA9=Input::get('answerRA9');
    $answerRA10=Input::get('answerRA10');
    $answerRA11=Input::get('answerRA11');
    $answerRA12=Input::get('answerRA12');
    $answerRA13=Input::get('answerRA13');
    $answerRA14=Input::get('answerRA14');
    $answerRA15=Input::get('answerRA15');
    $answerRA16=Input::get('answerRA16');
    $answerRA17=Input::get('answerRA17');
    $answerRA18=Input::get('answerRA18');
    $answerRA19=Input::get('answerRA19');
    $answerRA20=Input::get('answerRA20');
    $answerRA = array($answerRA1,$answerRA2,$answerRA3,$answerRA4,$answerRA5,$answerRA6,$answerRA7,$answerRA8,
        $answerRA9,$answerRA10,$answerRA11,$answerRA12,$answerRA13,$answerRA14,$answerRA15,$answerRA16,$answerRA17,
        $answerRA18,$answerRA19,$answerRA20);
     if(isset($_POST['submitRA'])) 
    {
        DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_ra' => istController::getCheckedValueTV($answerRA,$ansRAall)));  // update the record in the DB.   
    }  
    return view('soal_ist_zr');
  } 

   function finishZR() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
  //$ansZRall = array("8", "11", "45","63", "12", "80","14", "12", "23","10", "27", "25","27", "14", "46","10", "42", "7","5","14");
   $ansZRall = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");

    $all = array();

    $ket = array("SR","R","S","T","ST");
    $answerZR1=Input::get('answerZR1');
    $answerZR2=Input::get('answerZR2');
    $answerZR3=Input::get('answerZR3');
    $answerZR4=Input::get('answerZR4');
    $answerZR5=Input::get('answerZR5');
    $answerZR6=Input::get('answerZR6');
    $answerZR7=Input::get('answerZR7');
    $answerZR8=Input::get('answerZR8');
    $answerZR9=Input::get('answerZR9');
    $answerZR10=Input::get('answerZR10');
    $answerZR11=Input::get('answerZR11');
    $answerZR12=Input::get('answerZR12');
    $answerZR13=Input::get('answerZR13');
    $answerZR14=Input::get('answerZR14');
    $answerZR15=Input::get('answerZR15');
    $answerZR16=Input::get('answerZR16');
    $answerZR17=Input::get('answerZR17');
    $answerZR18=Input::get('answerZR18');
    $answerZR19=Input::get('answerZR19');
    $answerZR20=Input::get('answerZR20');
    $answerZR = array($answerZR1,$answerZR2,$answerZR3,$answerZR4,$answerZR5,$answerZR6,$answerZR7,$answerZR8,
        $answerZR9,$answerZR10,$answerZR11,$answerZR12,$answerZR13,$answerZR14,$answerZR15,$answerZR16,$answerZR17,
        $answerZR18,$answerZR19,$answerZR20);

     if(isset($_POST['submitZR'])) 
    {
       
    $ok= istController::getCheckedValueTV($answerZR,$ansZRall); 
      DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_zr' => $ok));  // update the record in the DB.   
    }  
     return view('soal_ist_fa');
    
  } 

  function finishFA() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
  //$ansFA1 = array("3", "4", "4","5", "1", "1","2", "5", "3","2", "5", "3","4", "4", "4","2", "3", "1","5","2");
   $ansFA1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");


    $all = array();

    $ket = array("SR","R","S","T","ST");
    
 $postNameArrFA = array('answerFA1', 'answerFA2', 'answerFA3', 'answerFA4', 'answerFA5','answerFA6', 'answerFA7', 'answerFA8', 'answerFA9', 'answerFA10',
        'answerFA11', 'answerFA12', 'answerFA13', 'answerFA14', 'answerFA15','answerFA16', 'answerFA17', 'answerFA18', 'answerFA19', 'answerFA20');

     if(isset($_POST['submitFA'])) 
    {
      
    $ok= istController::getCheckedValue43($ansFA1,$postNameArrFA);
     DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_fa' => $ok));  // update the record in the DB.   
    } 
     return view('soal_ist_wu');
       
  } 

   function finishWU() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
/*  $ansWU1 = array("3", "3", "4","2", "1", "2","2", "4", "3","3", "5", "1","1", "2", "4","5", "2", "5","4","3");
*/      $ansWU1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");


    $all = array();

    $ket = array("SR","R","S","T","ST");
    

    $postNameArrWU = array('answerWU1', 'answerWU2', 'answerWU3', 'answerWU4', 'answerWU5','answerWU6', 'answerWU7', 'answerWU8', 'answerWU9', 'answerWU10',
        'answerWU11', 'answerWU12', 'answerWU13', 'answerWU14', 'answerWU15','answerWU16', 'answerWU17', 'answerWU18', 'answerWU19', 'answerWU20');

     if(isset($_POST['submitWU'])) 
    {
      
    $ok= istController::getCheckedValue43($ansWU1,$postNameArrWU); 
     DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_wu' => $ok));  // update the record in the DB.   
    } 
     return view('pengantar_soal_ist_me');
   
  } 

    function pengantar_soal_me() {
     
     return view('soal_ist_me');
   
  } 


   function finishME() {
     $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;

    //$ansME1 = array("5", "4", "2","5", "2", "4","4", "3", "1","1", "2", "5","1", "4", "3","4", "1", "1","3","2");
     $ansME1 = array("1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1", "1", "1","1","1");
    
    $all = array();

    $ket = array("SR","R","S","T","ST");
    
   $postNameArrME = array('answerME1', 'answerME2', 'answerME3', 'answerME4', 'answerME5','answerME6', 'answerME7', 'answerME8', 'answerME9', 'answerME10',
        'answerME11', 'answerME12', 'answerME13', 'answerME14', 'answerME15','answerME16', 'answerME17', 'answerME18', 'answerME19', 'answerME20');

    if(isset($_POST['submitME'])) 
    {
        
    $ok= istController::getCheckedValue43($ansME1,$postNameArrME);  
    
     DB::table('ujian_ist')
        ->where('id_user', $get_user_id)  
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('bobot_me' => $ok));  // update the record in the DB.   
    }  
    istController::finishIST();
    return view('hasil_rekomendasi');
  } 

function finishIST() {
    $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;
    $bobots = DB::table('ujian_ist')->select('bobot_se', 'bobot_wa','bobot_an',
        'bobot_ge','bobot_ra','bobot_zr','bobot_fa','bobot_wu','bobot_me')->where('id_user',$get_user_id)->get();
    $profil = array();

    $tot_ti = array();
    $tot_si = array();
    $tot_akun = array();
    $tot_man = array();
    $tot_mi = array();

    $ti = array();
    $si = array();
    $akun = array();
    $man = array();
    $mi = array();
    $all_program = DB::table('profil_ist')->select('SE', 'WA','AN',
        'GE','RA','ZR','FA','WU','ME')->get();
    $all_programs=array();
    foreach($all_program as $program)
        {
           $hsl_se=(int)$program->SE;
           $hsl_wa=(int)$program->WA;
           $hsl_an=(int)$program->AN;
           $hsl_ge=(int)$program->GE;
           $hsl_ra=(int)$program->RA;
           $hsl_zr=(int)$program->ZR;
           $hsl_fa=(int)$program->FA;
           $hsl_wu=(int)$program->WU;
           $hsl_me=(int)$program->ME;
           array_push($all_programs, $hsl_se,$hsl_wa,$hsl_an,$hsl_ge,$hsl_ra,$hsl_zr,$hsl_fa,$hsl_wu,$hsl_me);
         }

         $data = array();
    $dataTI = array();
    $dataSI = array();
    $dataAK = array();
    $dataMA = array();
    $dataMI = array();

    foreach($bobots as $bobot)
        {
           $hsl_se=((int)$bobot->bobot_se);
           $hsl_wa=((int)$bobot->bobot_wa);
           $hsl_an=((int)$bobot->bobot_an);
           $hsl_ge=((int)$bobot->bobot_ge);
           $hsl_ra=((int)$bobot->bobot_ra);
           $hsl_zr=((int)$bobot->bobot_zr);
           $hsl_fa=((int)$bobot->bobot_fa);
           $hsl_wu=((int)$bobot->bobot_wu);
           $hsl_me=((int)$bobot->bobot_me);
          
           array_push($data,$hsl_se,$hsl_wa,$hsl_an,$hsl_ge,$hsl_ra,$hsl_zr,$hsl_fa,$hsl_wu,$hsl_me);
        }

$arrays = array_chunk($all_programs, 9);
$ncf_to = array();
            for ($i = 0; $i < count($arrays); $i++) {
                ${"program_{$i}"} = array(); 
                ${"tot_{$i}"} = 0; 
                ${"tot_1{$i}"} = 0; 
                ${"tot_all_{$i}"} = array(); 
                 $hasil_semua= array(); 
                ${"program_{$i}"} = $arrays[$i];

                foreach ($data as $key=>$data_ti) {
                         //${"tot_{$i}"}= $this->convert_to_bobot($data_ti - ${"program_{$i}"}[$key])/5;  
                            ${"tot_{$i}"}= $data_ti - ${"program_{$i}"}[$key];  
                           array_push(${"tot_all_{$i}"},  ${"tot_{$i}"});
                    }
                    foreach ( ${"tot_all_{$i}"} as $key => $value) {
                         ${"tot_1{$i}"}+=$this->convert_to_bobot($value);
                         
                    }
                    array_push($ncf_to,  ${"tot_1{$i}"}/9);     

            }

/*for ($i = 0; $i < count($arrays); $i++) {
    ${"program_{$i}"} = array(); 
    ${"tot_{$i}"} = 0; 
    ${"program_{$i}"} = $arrays[$i];

    foreach ($data as $key=>$data_ti) {
             ${"tot_{$i}"}+= $this->convert_to_bobot($data_ti - ${"program_{$i}"}[$key])/9;  
             
        }
        array_push($ncf_to, ${"tot_{$i}"});    

}*/

       $string = '';  
foreach ($ncf_to as $key => $value) {
    $string .= ",$value";
}
 /*$ti = $arrays[0];
        $si = $arrays[1];
        $akun = $arrays[2];
        $man = $arrays[3];
        $mi = $arrays[4];


  
        $tot=0;

         $total_ti=0; $total_si=0; $total_ak=0; $total_ma=0; $total_mi=0;
          $tot_ti=0; $tot_si=0; $tot_ak=0; $tot_ma=0; $tot_mi=0;

        foreach ($data as $key=>$data_ti) {
            $tot_ti+= $this->convert_to_bobot($data_ti - $ti[$key])/9;      
        }
        
       foreach ($data as $key=>$data_si) {
        
             $tot_si+=$this->convert_to_bobot($data_si - $si[$key])/9;
            
        }
        
        foreach ($data as $key=>$data_akun) {
            
            $tot_ak+=$this->convert_to_bobot($data_akun - $akun[$key])/9;
        }
        
        foreach ($data as $key=>$data_ma) {
           
            $tot_ma+=$this->convert_to_bobot($data_ma - $man[$key])/9;
            
        }
       
        foreach ($data as $key=>$data_mi) {
           
            $tot_mi+=$this->convert_to_bobot($data_mi - $mi[$key])/9;  
        }
*/
      


$string = substr($string, 1); // remove leading ","
         DB::table('ujian_ist')
        ->where('id_user', $get_user_id) 
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('ncf' => $string));  // update the record in the DB.          

        istController::total();
         

  }   

  public function convert_to_bobot($gap){
        if($gap == 0){
            return 5;

        }else if($gap == 1  ){
            return 4.5;

        }else if($gap == 2){
             return 3.5;

        }else if($gap == 3){
             return 2.5;

        }else if($gap == 4){
             return 1.5;

        }else if($gap == -1){
            return 4;

        }else if($gap == -2){
             return 3;

        }else if($gap == -3){
             return 2;

        }else if($gap == -4){
             return 1;
        }else{

        }
    }

function getCheckedValue43($ansSE1,$postNameArr) {
    $countSE = 0;
    $countAll = 0;
    $minSE = array(0,4,8,13,17);
    $maxSE = array(3,7,12,16,20);
    $ket = array("SR","R","S","T","ST");
    
 // Array of post values for each different form on your page.
   
     $hasil=array();

    // Find all of the post identifiers within $_POST
    $postIdentifierArr = array();
        
    foreach ($postNameArr as $postName)
    {
        if(isset($_POST[$postName])) 
        {     
            array_push($hasil, $_POST[$postName]);
         
           
        }
    else
        {
             array_push($hasil, 0);
        }
    }

    foreach($hasil as $keyRes=>$valueRes){
        
        if($valueRes==$ansSE1[$keyRes]){
                    $countSE++;
                }
            }
            
            /* echo 'ini:' .$countSE;*/
            foreach($minSE as $key3=>$value3){
            if($countSE>=$value3 && $countSE<=$maxSE[$key3]){
                 $countAll=$key3+1;                 
            }
        }
        return $countAll;
}

function total()
{
       $tot_uan =array();
       $tot_istt =array();

       $tot_all =array();
       $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;

      $tot_un = DB::table('ujian_nasional')->select('nsf')->where('id_user','=',$get_user_id)->first();
       $tot_ist = DB::table('ujian_ist')->select('ncf')->where('id_user','=',$get_user_id)->first();

            $splittedstringUN=explode(",",$tot_un->nsf);
            $splittedstringIST=explode(",",$tot_ist->ncf);
            foreach ($splittedstringUN as $key => $value) {
                array_push($tot_uan, (((float)$value*30)/100));
            }    
            

               foreach ($splittedstringIST as $key => $value) {
                array_push($tot_istt, (((float)$value*70)/100));
            }  
            
            foreach ($tot_uan as $key => $value) {
                array_push($tot_all, ($value+$tot_istt[$key]));

              }  
              
                 $sortagain=array();
                 $sortagain=$tot_all;
                 rsort($tot_all);
                 $string_index="";
                 $arr1 = array();

                 foreach ($tot_all as $key => $value) {
                     $string_index .=','.$this->getIndex($value, $sortagain);
                 }
                  $ok=substr($string_index, 1);
               
            $splittedstring=explode(",",$ok);
            foreach ($splittedstring as $key => $value) {
                array_push($arr1,$value);
            }    
                 
//get all name program study
        $nama_program = DB::table('program_study')->select('nama_program')->get();
        $allProg=array();
        $allProg1=array();
         foreach($nama_program as $nm_prog =>$value)
            {
                
                $hsl_se=$value->nama_program;
                array_push($allProg, $hsl_se);
            }

              foreach ($arr1 as $keyw => $arr1s) 
            {
               
                array_push($allProg1,  $allProg[$arr1s]);
            }
            $stringRekom='';
            foreach ($allProg1 as $key => $value) {
                $stringRekom .= ",$value";
            }
            $stringRekom=substr($stringRekom, 1);
            
           $rekomendasi = DB::table('user')->select('rekomendasi')->where('user_id',$get_user_id)->first();
   

         DB::table('user')
        ->where('user_id', $get_user_id) 
        ->limit(1)  // optional - to ensure only one record is updated.
        ->update(array('rekomendasi' => $stringRekom));  // update the record in the DB. 



}

function getIndex($value1,$arr)
{
    foreach ($arr as $key => $value) {
        if($value == $value1){
               return $key;
        }
    }
}



function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
}

function getCheckedValueTV($answerRA,$ansRAall) {

    $countSE = 0;
    $countAll = 0;
        $minSE = array(0,2,8,13,17);
    $maxSE = array(1,7,12,16,20);
    
    $hasil=array();

    // Find all of the post identifiers within $_POST
    $postIdentifierArr = array();
        
    foreach ($answerRA as $postName)
    {
             array_push($hasil, $postName);
    }

    foreach($hasil as $keyRes=>$valueRes){
        
        if($valueRes==$ansRAall[$keyRes]){
                    $countSE++;
                }
            }
            
            /* echo 'ini:' .$countSE;*/
            foreach($minSE as $key3=>$value3){
            if($countSE>=$value3 && $countSE<=$maxSE[$key3]){
                 $countAll=$key3+1;                 
            }
        }
        return $countAll;

}



public function istAN(){      
     //submitAN
     $countAN = 0;

            $ansAN1 = array("4", "4", "3");
            $ansAN2 = array($_POST['answerAN1'], $_POST['answerAN2'], $_POST['answerAN3']);
            foreach($ansAN1 as $key=>$value){
            if($value==$ansAN2[$key]){
                $countAN++;}
             
            }
            
         return $countAN;
}

public function istGE(){      
     //submitGE
     $countGE = 0;

            $ansGE1 = array("4", "4", "3");
            $ansGE2 = array($_POST['answerGE1'], $_POST['answerGE2'], $_POST['answerGE3']);

            foreach($ansGE1 as $key=>$value){
            if($value==$ansGE2[$key]){
                $countGE++;}
            }
           return $countGE;
}

public function istRA(){      
    //submitRA
    $countRA = 0;
        
            $ansRA1 = array("4", "4", "3");
            $ansRA2 = array($_POST['answerRA1'], $_POST['answerRA2'], $_POST['answerRA3']);

            foreach($ansRA1 as $key=>$value){
            if($value==$ansRA2[$key]){
                $countRA++;}
            }
            return $countRA;
}

public function istZR(){      
            //submitZR     
        $countZR = 0;

            $ansZR1 = array("4", "4", "3");
            $ansZR2 = array($_POST['answerZR1'], $_POST['answerZR2'], $_POST['answerZR3']);

            foreach($ansZR1 as $key=>$value){
            if($value==$ansZR2[$key]){
                $countZR++;}
            }
            return $countZR;
}

public function istFA(){      
     //submitFA
     $countFA = 0;

            $ansFA1 = array("4", "4", "3");
            $ansFA2 = array($_POST['answerFA1'], $_POST['answerFA2'], $_POST['answerFA3']);

            foreach($ansFA1 as $key=>$value){
            if($value==$ansFA2[$key]){
                $countFA++;}
            }
           return $countFA;
}

public function istWU(){      

        //submitWU
            $countWU = 0;

            $ansWU1 = array("4", "4", "3");
            $ansWU2 = array($_POST['answerWU1'], $_POST['answerWU2'], $_POST['answerWU3']);

            foreach($ansWU1 as $key=>$value){
            if($value==$ansWU2[$key]){
                $countWU++;}
            }
            return $countWU;
}

public function istME(){      
     //submitME
     $countME=0;

            $ansME1 = array("4", "4", "3");
            $ansME2 = array($_POST['answerME1'], $_POST['answerME2'], $_POST['answerME3']);

            foreach($ansME1 as $key=>$value){
            if($value==$ansME2[$key]){
                $countME++;}
            }
            return $countME;
}

public function allRes()
{
      $minSE = array(0,4,8,13,17);
        $maxSE = array(3,7,12,16,20);
     $resultAll= array();
      //array_push($resultAll,istSE());
      
    echo istController::istSE();;
     /*$ket = array("ST","T","S","R","SR");
        foreach($resultAll as $keyRes=>$valueRes){
            foreach($minSE as $key3=>$value3){
           
            if($resultAll[$keyRes]>=$value3 && $resultAll[$keyRes]<=$maxSE[$key3]){
                 echo 'Keterangan:' .$ket[$key3];
                
            }
                }
            
        }*/


}

       /* if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range");
} else {
    echo("Variable value is within the legal range");
}*/
    
    
//$min = 0,4,8,13,17;
/*$max = 3,7,12,16,20;



     /*$data1="How/to/split/string";
          $data="How/to/split/string";
            $splittedstring=explode("/",$data);
            foreach ($splittedstring as $key => $value) {
                if($key=='1')
                {
                    echo "splittedstring[".'1'."] = ".$value."<br>";
                }
            }       */    
/*
      if (isset($_POST['submit'])) {
    if (!empty($_POST['grade'])) {
      if (!empty($_POST['jungle'])) {
        if ($_POST['jungle']=="cheetah") { 


          $data1="How/to/split/string";
          $data="How/to/split/string";
            $splittedstring=explode("/",$data);
            foreach ($splittedstring as $key => $value) {
                if($key=='1')
                {
                    echo "splittedstring[".'1'."] = ".$value."<br>";
                }
            }
        }
        else { 
            echo "Sorry, wrong answer."; 
        }
    } else
    { 
        echo "You did not choose an answer."; 
    }
} 
else { echo "Your answer will not be graded."; }
  } else { echo "Please submit the form."; }
        
    }*/

    /*$myString = "9,admin@example.com,8";
$myArray = explode(',', $myString);*/

}
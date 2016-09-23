<?php 
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Siswa;
use Carbon\Carbon;
use App\rekapLaporan;
use Validator;



class UNController extends Controller
{
    public function index()
    {
        return view('inputdataun');
    }
      public function create()
    {
        return view('inputdataun');
    }

    public function store(Request $request)
    {   
                //validasi
            $input = Input::all();  
            $rules = array(
                'bindo'              => 'required|numeric', 
                'bing'               => 'required|numeric',
                'mate'               => 'required|numeric',
                'ipa'                => 'required|numeric',
                'ips'                => 'required|numeric',
            );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
             $messages = $validator->messages();
              return redirect('un_data')->withErrors($validator);
        } else {
            $post = $request->all();
            $nilai_un = array(
                '0' => $post['mate'],
                '1' => $post['bindo'],
                '2' => $post['bing'],    
                '3' => $post['ipa'],
                '4' => $post['ips'],
            );

        }
            $nilai_profil_un_siswa = array(
                '0' =>$this->convert_to_profil($nilai_un['0']),
                '1' =>$this->convert_to_profil($nilai_un['1']),
                '2' =>$this->convert_to_profil($nilai_un['2']),
                
                '3' =>$this->convert_to_profil($nilai_un['3']),
                '4' =>$this->convert_to_profil($nilai_un['4']),
            );
            

            $all_program = DB::table('profil_un')->select('matematika', 'bindo','bing','ipa','ips')->get();
             $user = DB::table('user')->orderBy('user_id', 'desc')->first();
            $get_user_id = $user->user_id;

    $all_programs=array();
    foreach($all_program as $program)
        {
           $hsl_mat=(int)$program->matematika;
           $hsl_bindo=(int)$program->bindo;
           $hsl_bing=(int)$program->bing;
           $hsl_ipa=(int)$program->ipa;
           $hsl_ips=(int)$program->ips;
           array_push($all_programs, $hsl_mat,$hsl_bindo,$hsl_bing,$hsl_ipa,$hsl_ips);
         }
            $arrays = array_chunk($all_programs, 5);
           
           $allData = array();
            $nsf_to = array();
            for ($i = 0; $i < count($arrays); $i++) {
                ${"program_{$i}"} = array(); 
                ${"tot_{$i}"} = 0; 
                ${"tot_1{$i}"} = 0; 
                ${"tot_all_{$i}"} = array(); 
                 $hasil_semua= array(); 
                ${"program_{$i}"} = $arrays[$i];

                foreach ($nilai_profil_un_siswa as $key=>$data_ti) {
                         //${"tot_{$i}"}= $this->convert_to_bobot($data_ti - ${"program_{$i}"}[$key])/5;  
                            ${"tot_{$i}"}= $data_ti - ${"program_{$i}"}[$key];  
                           array_push( ${"tot_all_{$i}"},  ${"tot_{$i}"});
                    }
                    foreach ( ${"tot_all_{$i}"} as $key => $value) {
                         ${"tot_1{$i}"}+=$this->convert_to_bobot($value);
                         
                    }
                    array_push($nsf_to,  ${"tot_1{$i}"}/5);     

            }

             $data = array(
                        'id_user' =>$get_user_id, 
                        'bobot_mate' =>  $tot_0,
                        'bobot_bindo' =>  $tot_1,
                        'bobot_bing' =>  $tot_2,
                        'bobot_ipa' => $tot_3,
                        'bobot_ips' => $tot_4,
                        'nsf' =>  0,
                        'created_at' =>Carbon::now());

            $user_favorites = DB::table('ujian_nasional')->where('id_user', '=', $get_user_id)->first();
        if (is_null($user_favorites)) {
            $insert = DB::table('ujian_nasional')->insert($data);
        }

                   $string = '';  
            foreach ($nsf_to as $key => $value) {
                $string .= ",$value";
            }
      


            $string = substr($string, 1); // remove leading ","
                     DB::table('ujian_nasional')
                    ->where('id_user', $get_user_id) 
                    ->limit(1)  // optional - to ensure only one record is updated.
                    ->update(array('nsf' => $string));  // update the record in the DB.          

            return view('pengantar_ujian_ist');      
            

    }
    

    public function convert_to_profil($input_nilai_un){
        if($input_nilai_un >= 80 && $input_nilai_un <=100 ){
                return 5;
        }else if($input_nilai_un >= 60 && $input_nilai_un <=79){
                return 4;
        }else if($input_nilai_un >= 40 && $input_nilai_un <= 59){
                return 3;
        }else if($input_nilai_un >= 20 && $input_nilai_un <= 39){
                return 2;
        }else if($input_nilai_un >= 0 && $input_nilai_un <= 19){
                return 1;
        }else{
                return 0;
        }
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

    public function count_total($ncf, $nsf){
        return (70%$ncf)+(30%$nsf);
    }

    public function sort($array){
        
    }
    
}


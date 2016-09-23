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

class InputDataMhwController extends Controller {

     public function index()
    {
        return view('inputdata');
    }

    public function create()
    {
        return view('inputdata');

    }

    public function store(Request $request)
    {
        //validasi
            $input = Input::all();
            $rules = array(
                'no_induk'             => 'required|numeric', 
                'nama_siswa'            => 'required',
                'no_hp'                 => 'required|numeric|min:10',
                'asal_sekolah'          => 'required',
                'email'                 => 'required|email'
            );

        $validator = Validator::make($input, $rules);


        $noInduk = Input::get('no_induk');
            $no_indukAll = DB::table('user')->select('no_induk')->get();
            $all_induks=array();
/*if($no_indukAlls==$noInduk)
                  {
                       return redirect('siswa_data')->withErrors('Anda sudah Pernah Melakukan Ujian');
                  }*/
foreach($no_indukAll as $no_indukAlls)
        {
           $hsl_se=$no_indukAlls->no_induk;
                  array_push($all_induks, $hsl_se);
               }

                 

        if ($validator->fails()) {
             $messages = $validator->messages();
              return redirect('siswa_data')->withErrors($validator);
        } 
       
        else if(in_array($noInduk, $all_induks)) 
        {
           return redirect('siswa_data')->withErrors('Anda sudah Pernah Melakukan Ujian');
        }
        
        else {
            $post = $request->all();
            $data = array(
                        'role' => 'Siswa',
                        'no_induk' => $post['no_induk'],
                        'nama' => $post['nama_siswa'],
                        'asal_sekolah' => $post['asal_sekolah'],
                        'no_hp' => $post['no_hp'],
                        'email' => $post['email'],
                        'created_at' =>  Carbon::now());

            $insert = DB::table('user')->insert($data);

            if($insert > 0){
                    $user = DB::table('User')->where('nama', $data['nama'])->first();
                    //dd($user ->user_id);
                    return redirect()->route('ujian_un')->with('user_id',$user->user_id);
            }else{
                    return redirect('siswa_data');
            }   
        }
    }
}
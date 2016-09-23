<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\Profil_Uan;
use App\Profil_IST;

class UanController extends Controller {

   public function index()
    {
        return view('inputdata');
    }

     public function store(Request $request)
    {
         $input = new Profil_Uan;
       $getId = DB::table('program_study')->select('id_programstudy')->orderBy('id_programstudy', 'desc')->first();
       $input-> id_profil_un = $getId->id_programstudy;
       $input-> id_programstudy = $getId->id_programstudy;
       $input-> matematika = $request->matematika;
       $input-> bindo = $request->bindo;
       $input-> bing = $request->bing;
       $input-> ipa = $request->ipa;
       $input-> ips = $request->ips;
       $input->save();
         return redirect('admin_page/program_studi');
    }

      public function edit($id_prog)
    {
        $program_studi = Profil_Uan::where('id_programstudy', '=', $id_prog)->first();
        $program_studi1 = Profil_Uan::select('id_programstudy')->where('id_profil_un', '=', $id_prog)->first();
        $nama_program = DB::table('program_study')
                        ->select('nama_program')
                        ->where('id_programstudy', '=', $id_prog) 
                        ->first();
        echo $program_studi1;
        return view('edit_profil_uan',compact('program_studi','nama_program'));
    }


    public function update($id_prog)
    {
    
        $istUpdate = Input::except('_method', '_token');
        $input = Input::all();  
            $rules = array(
                'nama_program' => 'required'

            );
              $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
             $messages = $validator->messages();
              return view('add_program_studi')->withErrors($validator);
        } else {
        $program_studi = Profil_Uan::where('id_profil_un', '=', $id_prog)
        ->where('id_programstudy', '=', $id_prog)
        ->update($istUpdate);
         return redirect('admin_page/program_studi');
       }
    }



}
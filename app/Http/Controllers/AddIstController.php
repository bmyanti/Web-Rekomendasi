<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\ProgramStudi;
use App\Profil_IST;
use Validator;

class AddIstController extends Controller {

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
      $input = Input::all();  
            $rules = array(
                'SE' => 'required|numeric',
                'WA' => 'required|numeric',
                'AN' => 'required|numeric',
                'GE' => 'required|numeric',
                'RA' => 'required|numeric',
                'ZR' => 'required|numeric',
                'FA' => 'required|numeric',
                'WU' => 'required|numeric',
                'ME' => 'required|numeric'
            );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
             $messages = $validator->messages();
              return view('add_ist_profil')->withErrors($validator);
        } else {

            $input = new Profil_IST;
           $getId = DB::table('program_study')->select('id_programstudy')->orderBy('id_programstudy', 'desc')->first();
           $input-> id_profil_ist = $getId->id_programstudy;
           $input-> id_programstudy = $getId->id_programstudy;
           $input-> SE = $request->SE;
           $input-> WA = $request->WA;
           $input-> AN = $request->AN;
           $input-> GE = $request->GE;
           $input-> RA = $request->RA;
           $input-> ZR = $request->ZR;
           $input-> FA = $request->FA;
           $input-> WU = $request->WU;
           $input-> ME = $request->ME;
           $input->save();
             return view('add_uan_profil');
       }
    }



}
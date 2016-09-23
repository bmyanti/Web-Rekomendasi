<?php 
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\ProgramStudi;
use App\Profil_IST;
use App\Profil_Uan;
use Validator;

class AdminController extends Controller {

     public function index()
    {
        return view('admin_page');
    }

    public function tentang(){
       
        return view('tentang');
    }
    public function bantuan(){
       
        return view('bantuan');
    }
    public function program_studi(){

        $program_studi = DB::table('program_study')->get();    
        return view('program_studi',compact('program_studi'));
    }
    public function edit_program_studi($id_prog)
    {
        $program_studi = DB::table('program_studis')->where('id','=',$id_prog)
        ->get();
        return view('edit_program_studi',compact('program_studi'));
        
    }
        public function update_program_studi($id_prog)
    {
         $program_studi = DB::table('program_studis')->where('id','=',$id_prog)->get();
        return view('edit_ist_program_studi',compact('program_studi')); 
    }

    public function edit($id_prog)
    {
        $program_studi = Profil_IST::where('id_programstudy', '=', $id_prog)->first();
        $program_studi1 = Profil_IST::select('id_programstudy')->where('id_profil_ist', '=', $id_prog)->first();
        $nama_program = DB::table('program_study')
                        ->select('nama_program')
                        ->where('id_programstudy', '=', $id_prog) 
                        ->first();
        echo $program_studi1;
        return view('edit_ist_program_studi',compact('program_studi','nama_program'));
    }


    public function update($id_prog)
    {
        $istUpdate = Input::except('_method', '_token');
        $program_studi = Profil_IST::where('id_profil_ist', '=', $id_prog)
        ->where('id_programstudy', '=', $id_prog)
        ->update($istUpdate);
         return redirect('admin_page/program_studi');
    }
    public function destroy($id_prog)
    {
        Profil_IST::where('id_profil_ist','=',$id_prog)->delete();
                Profil_Uan::where('id_profil_un','=',$id_prog)->delete();
        ProgramStudi::where('id_programstudy','=',$id_prog)->delete();

        return redirect('admin_page/program_studi');
    }
    public function create()
    {
        return view('add_program_studi');
    }
    public function store()
    {

         $input = Input::all();  
            $rules = array(
                'nama_program' => 'required'

            );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
             $messages = $validator->messages();
              return view('add_program_studi')->withErrors($validator);
        } else {

            $program_studi= Request::all();
            ProgramStudi::create($program_studi);
              return view('add_ist_profil');
      }
    }
/*    public function store_ist_profil(Request $request)
    {
        $id_prg= ProgramStudi::orderBy('id_programstudy', 'desc');
       $input = new Profil_IST;
       $input-> id_programstudy = $id_prg;
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
        return redirect('admin_page/program_studi');
    }
*/
/*    public function update_program_studi($id_prog, Request $request){
        
        $program_studi = DB::table('program_study')->where('id_prog', '=', $id_prog)->get();
        DB::table('program_study')->where('id_prog',$id_prog)->update(array('nama_program' => $request->get('nama_program')));
          return redirect('admin_page/program_studi');
    }*/
/*
     public function update_program_studi($id_prog)
    {
        $prodiUpdate =Request::all();
        $program_studi = Siswa::find($id_prog);
        $program_studi->update($prodiUpdate);
        return redirect('admin_page/program_studi');
    }*/


    public function statistik(){
       
        return view('statistik');
    }

}




<?php 
namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class StatistikaController extends Controller {

   public function index()
    {
        return view('inputdata');
    }

    public function create()
    {
      return view('inputdata');
    }

   public function statistik()
   {

    $query = DB::table('user')
    ->select(array('asal_sekolah', DB::raw('COUNT(asal_sekolah) as total')))
    ->where('role','=','Siswa')
    ->groupBy('asal_sekolah')
    ->get();

   if (!is_null($query)) {
           $goar = [];
           $jlh = [];
           $data[0] = array('goar','jlh');
           foreach ($query as $tgl) {
               array_push($goar, $tgl->asal_sekolah);
               array_push($jlh, $tgl->total);
           }

       }

    return view('statistik',compact('goar','jlh','query'));
   }


   public function statistikRekomendasi()
   {
    $query_all = DB::table('user')->select('rekomendasi')->where('role','=','Siswa')->get();
    $temp [] = $query_all;

    $query_TI = 0; $query_SI = 0; $query_AK = 0; $query_MA = 0; $query_MI = 0;
    foreach ($query_all as $key => $value) {
          $array = explode(',',$value->rekomendasi);
          if($array[0] == 'Teknik Informatika'){
              $query_TI++;
          } else if($array[0] == 'Sistem Informasi'){
              $query_SI++;
          } else if($array[0] == 'Manajemen'){
              $query_MA++;
          }else if($array[0] == 'Manajemen Informasi'){
              $query_MI++;
          }else if($array[0] == 'Akuntansi'){
              $query_AK++;
          }else{}
    }

    

    $count_TI [] = $query_TI;
    $count_SI [] = $query_SI;
    $count_AK [] = $query_AK;
    $count_MA [] = $query_MA;
    $count_MI [] = $query_MI;   
    
    $prodi = array_merge($count_TI, $count_SI,$count_AK,$count_MA,$count_MI);  
    return view('statistikRekomendasi',compact('prodi'));
   }

}



/*Select asal_sekolah, COUNT(asal_sekolah) AS jumlah
 From user
group by asal_sekolah*/
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil_Uan extends Model
{
     protected $table = "profil_un";
     protected $primarykey = "id_profil_uan";

     public function prodi()
     {
     	return $this->belongsTo('App\ProgramStudi');
     }

      protected $fillable =
        [
            'id_profil_un',
            'id_programstudy',
            'matematika',
            'bindo',
            'bing',
            'ipa',
            'ips'
        ];
}

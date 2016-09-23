<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil_IST extends Model
{
     protected $table = "profil_ist";
     protected $primarykey = "id_profil_ist";

     public function prodi()
     {
     	return $this->belongsTo('App\ProgramStudi');
     }

      protected $fillable =
        [
            'id_profil_ist',
            'id_programstudy',
            'SE',
            'WA',
            'AN',
            'GE',
            'RA',
            'ZR',
            'FA',
            'WU',
            'ME'
        ];
}

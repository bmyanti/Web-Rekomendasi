<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil_ist extends Model
{
     protected $table = "ujian_ist";
     protected $primarykey = "id_ist";
/*
     public function prodi()
     {
     	return $this->belongsTo('App\ProgramStudi');
     }
*/
      protected $fillable =
        [
            'id_ist',
            'id_user',
            'bobot_se',
            'bobot_wa',
            'bobot_an',
            'bobot_ge',
            'bobot_me',
            'bobot_ra',
            'bobot_zr',
            'bobot_fa',
            'bobot_wu',
            'ncf',
            'keterangan',
            'created_at',
            'updated_at',
            'id_program_studi'
        ];
}
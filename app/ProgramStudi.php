<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramStudi extends Model
{
     protected $table = "program_study";
     protected $fillable =
        [
            'id_programstudy',
            'id_user',
            'nama_program',
            'nilai_total'
        ];
    protected $primarykey = "id_programstudy";

    public function istprofil()
    {
    	return $this->hasMany('App\Profil_IST');
    }
}

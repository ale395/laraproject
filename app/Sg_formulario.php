<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sg_modulo;

class Sg_formulario extends Model
{
    protected $table = 'sg_formulario';

    protected $fillable = ['formulario', 'nombre_formulario', 'id_modulo', 'tipo'];

    protected $primaryKey = 'id_formulario';

    public function modulo(){

    	return $this->belongsTo(Sg_modulo::class, 'id_modulo');
    	
    }
}

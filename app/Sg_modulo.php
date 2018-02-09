<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sg_modulo extends Model
{
    protected $table = 'sg_modulo';

    protected $fillable = ['modulo', 'nombre_modulo'];

    protected $primaryKey = 'id_modulo';
}

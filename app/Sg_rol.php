<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sg_rol extends Model
{
    protected $table = 'sg_rol';

    protected $fillable = ['rol', 'nombre', 'estado'];
}

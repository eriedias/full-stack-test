<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    // por convencao já é usada a tabela usuarios
    // protected $table = 'usuarios';

    public $timestamps = false;
}

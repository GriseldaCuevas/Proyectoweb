<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model{

    protected $table = 'materias';

    public static function getAll(){
        return self::all();
    }
}

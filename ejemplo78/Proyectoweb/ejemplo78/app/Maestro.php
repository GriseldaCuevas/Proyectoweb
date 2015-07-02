<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model{

    protected $table = 'maestros';

    public static function getMaestro($id_maestro){
        return self::find($id_maestro);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model{

    protected $table = 'alumnos';

    public static function getAlumnosGrupo($id_grupo){
        return self::join('alumnos_grupo', 'alumnos.id', '=', 'alumnos_grupo.id_alumno')
            ->where('alumnos_grupo.id_grupo', '=', $id_grupo)
            ->get();
    }

    public static function getTotalAlumnosGrupo($id_grupo){
        return self::join('alumnos_grupo', 'alumnos.id', '=', 'alumnos_grupo.id_alumno')
            ->where('alumnos_grupo.id_grupo', '=', $id_grupo)
            ->count();
    }
}

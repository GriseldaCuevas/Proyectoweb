<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model{

    protected $table = 'grupos';

    public static function getGrupos($id_materia){
        return self::join('maestros', 'grupos.id_maestro', '=', 'maestros.id')
            ->join('materias', 'grupos.id_materia', '=', 'materias.id')
            ->select('grupos.id', 'grupos.aula', 'grupos.horario', 'grupos.id_maestro','maestros.nombres', 'maestros.apellidos', 'materias.nombre')
            ->where('grupos.id_materia', '=', $id_materia)
            ->get();
    }

    public static function getGrupo($id_grupo){
        return self::join('maestros', 'grupos.id_maestro', '=', 'maestros.id')
            ->join('materias', 'grupos.id_materia', '=', 'materias.id')
            ->select('grupos.id', 'grupos.aula', 'grupos.horario', 'grupos.id_maestro', 'grupos.id_materia','maestros.nombres', 'maestros.apellidos', 'materias.nombre')
            ->where('grupos.id', '=', $id_grupo)
            ->get()[0];
    }
}

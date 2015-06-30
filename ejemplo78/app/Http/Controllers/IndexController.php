<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Materia;
use App\Grupo;
use App\Alumno;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $materias=Materia::getAll();
        return view("index",compact("materias"));
    }
    public function gruposMateria($id_materia)
    {
        $materias=Materia::getAll();
        $grupos=Grupo::getGrupos($id_materia);
        return view("templates.tabla", compact("grupos","materias"));
    }
    public function getGrupo($id_grupo)
    {
        $grupo=Grupo::getGrupo($id_grupo);
        $alumnos=Alumno::getAlumnosGrupo($id_grupo);
        $vista=view("templates.pdf", compact("grupo","alumnos"));
    }

}

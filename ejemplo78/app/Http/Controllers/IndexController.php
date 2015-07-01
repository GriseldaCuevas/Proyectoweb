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

        $titulo = 'Bienvenido | IT CUliacan';
        $materias=Materia::getAll();
        return view("index",compact("materias", 'titulo'));
    }
    public function gruposMateria($id_materia)
    {
        $materias=Materia::getAll();
        $titulo = Materia::getMateria($id_materia)->nombre;
        $grupos=Grupo::getGrupos($id_materia);
        return view("templates.tabla", compact("grupos","materias", 'titulo'));
    }
    public function getGrupo($id_grupo)
    {
        $grupo=Grupo::getGrupo($id_grupo);
        $alumnos=Alumno::getAlumnosGrupo($id_grupo);
        $total = Alumno::getTotalAlumnosGrupo($id_grupo);
        $vista = view('templates.pdf', compact('grupo', 'alumnos', 'total'));
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }

}

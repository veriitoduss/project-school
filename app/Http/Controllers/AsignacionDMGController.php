<?php

namespace App\Http\Controllers;

use App\Models\AsignacionDMG;
use App\Models\Grade;
use App\Models\Materia;
use App\Models\Profesor;
use Illuminate\Http\Request;

/**
 * Controlador Asignacion profesor - materia - grado
 * Procesos que se realizaran sobre las asignaciones entre los profesores,
 * las materias y los grados de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     09 de noviembre del 2021
 */

class AsignacionDMGController extends Controller
{
    /**
     * Enlista los profesores,las materias, los grados y las asignaciones
     * para mostrarlos en vista asignada.
     */
    public function index()
    {
        //Estas variables guardaran los datos de su respectivo modelo.
        $asignacionDMG = AsignacionDMG::all();
        $grados = Grade::all();
        $materias = Materia::all();
        $profesores = Profesor::all();
        //Asigna la vista a mostrar con la variables declaradas anteriormente.
        return view('admin.asignacion-pgm',
                    compact('asignacionDMG', 'grados', 'materias','profesores'));
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function store(Request $request)
    {
        //La variable datosasignacionDMG guardara los datos obtenidos menos el token.
        $datosasignacionDMG = request()
                            ->except('_token');
        //En el modelo se insertaran los datos de la variable datosasignacionDMG.
        AsignacionDMG::insert($datosasignacionDMG);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('asginacionDMG');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos
     */
    public function destroy($id)
    {
        //En el modelo se eliminara los datos que contenga el identificar determinado.
        AsignacionDMG::destroy($id);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('asginacionDMG');
    }
}

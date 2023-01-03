<?php

namespace App\Http\Controllers;

use App\Models\AsignacionAG;
use App\Models\Estudiante;
use App\Models\Grade;
use Illuminate\Http\Request;

/**
 * Controlador Asignacion alumno - grado
 * Procesos que se realizaran sobre las asignaciones entre alumnos
 * y grados de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     09 de noviembre del 2021
 */

class AsignacionAGController extends Controller
{
    /**
     * Enlista los estudiantes, los grados y las asignaciones
     * para mostrarlos en vista asignada
     */
    public function index()
    {
        //estas variables guardaran los datos de su respectivo modelo
        $asignacionAG = AsignacionAG::all(); 
        $estudiantes = Estudiante::all();
        $grados = Grade::all();
        //asigna la vista a mostrar con la variables declaradas anteriormente
        return view('admin.asignacion-ag',
                    compact('estudiantes','grados','asignacionAG'));
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos
     */
    public function store(Request $request)
    {
        //la variable datosasignacionAG guardara los datos obtenidos menos el token
        $datosasignacionAG = request()
                            ->except('_token');
        //en el modelo se insertaran los datos de la variable datosasignacionAG
        AsignacionAG::insert($datosasignacionAG);
        //se hara su redireccionamiento al index de este controlador
        return redirect('asginacionAG');
    }

    /**
     * Modifica los datos obtenidos a su respectiva tabla en la base de datos
     */
    public function update($id)
    {
        //la variable datosasignacionAG guardara los datos obtenidos menos el token y el metodo
        $datosAsignacionAG = request()
                            ->except(['_token','_method']);
        //en el modelo se modificaran los datos de la variable datosasignacionAG teniendo en cuenta su id
        AsignacionAG::where('id','=', $id)
                            ->update($datosAsignacionAG);
        //se hara su redireccionamiento al index de este controlador
        return redirect('asginacionAG');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos
     */
    public function destroy($id)
    {
        //en el modelo se eliminara los datos que contenga el identificardor determinado
        AsignacionAG::destroy($id);
        //se hara su redireccionamiento al index de este controlador
        return redirect('asginacionAG');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

/**
* Controlador Grados
* Procesos que se realizaran sobre los grados que contiene la institucion
* 
* @author    Veronica Lisseth Dussan Parra
* @since     01 de noviembre del 2021
*/
class GradeController extends Controller
{
    /**
     * Enlista los estudiantes existentes para mostrarlos en vista asignada.
     */
    public function index()
    {
        //Esta variable guardara los datos de su respectivo modelo.
        $grados=Grade::all();
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.grades-admin',
                    compact('grados'));
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function store(Request $request)
    {
        //la variable datosGrado guardara los datos obtenidos menos el token
        $datosGrado=request()
                    ->except('_token');
        //en el modelo se insertaran los datos de la variable datosGrado
        Grade::insert($datosGrado);
        //se hara su redireccionamiento al index de este controlador
        return redirect('grado');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos.
     */
    public function destroy($id)
    {
        //en el modelo se eliminara los datos que contenga el identificardr determinado.
        Grade::destroy($id);
        //se hara su redireccionamiento al index de este controlador.
        return redirect('grado');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Controlador Profesores
 * Procesos que se realizaran sobre los profesores de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     22 de septiembre del 2021
 */

class ProfesorController extends Controller
{
    /**
     * Enlista los estudiantes existentes para mostrarlos en vista asignada.
     */
    public function index()
    {
        //Esta variable guardara los datos de su respectivo modelo.
        $profesores = Profesor::all();
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.teachers.teacher-admin', 
                    compact('profesores'));
    }

    /**
     * Muestra la vista donde se agregaran los datos
     */
    public function create()
    {
        //Estas variables guardaran los datos de su respectivo modelo.
        $grados = Grade::all();
        $usuarios = User::all();
        //Asigna la vista a mostrar con las variables declaradas anteriormente.
        return view('admin.teachers.add',
                    compact('grados','usuarios'));
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function store(Request $request)
    {
        //La variable datosProfesor guardara los datos obtenidos menos el token.
        $datosProfesor = request()
                        ->except('_token');
        //verificacion de la existencia del campo Foto.
        if ($request->hasFile('Foto')) {
        //al encontrar su existencia se guardara en storage/app/public/uploadsProfesores.
            $datosProfesor['Foto'] 
                            = $request
                            ->file('Foto')
                            ->store('uploadsProfesores', 'public');
        }
        //En el modelo se insertaran los datos de la variable datosProfesor.
        Profesor::insert($datosProfesor);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('profesor');
    }

    /**
     * Muestra la vista donde se editaran los datos
     */
    public function edit($id)
    {
        //Estas variables guardaran los datos de su respectivo modelo.
        $profesor = Profesor::findOrFail($id);
        $grados = Grade::all();
        //Asigna la vista a mostrar con las variables declaradas anteriormente.
        return view('admin.teachers.edit',
                    compact('profesor', 'grados'));
    }

    /**
     * Modifica los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function update(Request $request, $id)
    {
        //la variable datosEstudiante guardara los datos obtenidos menos el token y el metodo.
        $datosProfesor = request()
                        ->except(['_token', '_method']);
        //verificacion de la existencia del campo Foto.
        if ($request->hasFile('Foto')) {
            $estudiante = Profesor::findOrFail($id);
        //Elimina esta imagen desde donde esta guardada.
            Storage::delete('public/' . $estudiante->Foto);
        //Guarda tanto en la variable datosEstudiante como en el Storage el dato nuevo.
            $datosProfesor['Foto']
                        = $request
                        ->file('Foto')
                        ->store('uploadsProfesores', 'public');
        }
        //En el modelo se modificaran los datos de la variable datosEstudiante teniendo en cuenta su id.
        Profesor::where('id', '=', $id)
                    ->update($datosProfesor);
        //se hara su redireccionamiento al index de este controlador.
        return redirect('profesor');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos
     */
    public function destroy($id)
    {
        $profesor = Profesor::findOrFail($id);
        //verificacion al elimina la imagen desde donde esta guardada.
        if (Storage::delete('public/' . $profesor->Foto)) {
        //en el modelo se eliminara los datos que contenga el identificardor determinado.
            Profesor::destroy($id);
        }
        //se hara su redireccionamiento al index de este controlador.
        return redirect('profesor');
    }
}

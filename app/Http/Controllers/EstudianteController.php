<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Controlador Estudiantes
 * Procesos que se realizaran sobre los estudiantes de la institución
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     01 de noviembre del 2021
 */

class EstudianteController extends Controller
{
    /**
     * Enlista los estudiantes existentes para mostrarlos en vista asignada.
     */
    public function index()
    {
        //Esta variable guardara los datos de su respectivo modelo.
        $estudiantes = Estudiante::all();
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.alumnos.alumnos-admin',
                    compact('estudiantes'));
    }

    /**
     * Muestra la vista donde se agregaran los datos
     */
    public function create()
    {
        return view('admin.alumnos.add');
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function store(Request $request)
    {
        //La variable datosEstudiante guardara los datos obtenidos menos el token.
        $datosEstudiante = request()
                        ->except('_token');
        //verificacion de la existencia del campo Foto.
        if ($request->hasFile('Foto')) {
        //al encontrar su existencia se guardara en storage/app/public/uploadsEstudiantes.
            $datosEstudiante['Foto'] 
                            = $request
                            ->file('Foto')
                            ->store('uploadsEstudiantes', 'public');
        }
        //En el modelo se insertaran los datos de la variable datosEstudiante.
        Estudiante::insert($datosEstudiante);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('estudiante');
    }

    /**
     * Muestra la vista donde se editaran los datos
     */
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.alumnos.edit',
                    compact('estudiante'));
    }

    /**
     * Modifica los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function update(Request $request, $id)
    {
        //la variable datosEstudiante guardara los datos obtenidos menos el token y el metodo.
        $datosEstudiante = request()
                        ->except(['_token', '_method']);
        //verificacion de la existencia del campo Foto.
        if ($request->hasFile('Foto')) {
            $estudiante = Estudiante::findOrFail($id);
        //Elimina esta imagen desde donde esta guardada.
            Storage::delete('public/' . $estudiante->Foto);
        //Guarda tanto en la variable datosEstudiante como en el Storage el dato nuevo.
            $datosEstudiante['Foto']
                            = $request
                            ->file('Foto')
                            ->store('uploadsEstudiantes', 'public');
        }
        //En el modelo se modificaran los datos de la variable datosEstudiante teniendo en cuenta su id.
        Estudiante::where('id', '=', $id)
                        ->update($datosEstudiante);
        //se hara su redireccionamiento al index de este controlador.
        return redirect('estudiante');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        //verificacion al elimina la imagen desde donde esta guardada.
        if (Storage::delete('public/' . $estudiante->Foto)) {
        //en el modelo se eliminara los datos que contenga el identificardor determinado
            Estudiante::destroy($id);
        }
        //se hara su redireccionamiento al index de este controlador
        return redirect('estudiante');
    }
}

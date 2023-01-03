<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

/**
 * Controlador Materias
 * Procesos que se realizaran sobre las materias que se dictan en la institucion
 * 
 * @author    Veronica Lisseth Dussan Parra
 * @since     29 de septiembre del 2021
 */
class MateriaController extends Controller
{
    /**
     * Enlista las materias existentes para mostrarlos en vista asignada.
     */
    public function index()
    {
        //Esta variable guardara los datos de su respectivo modelo.
        $materias = Materia::all();
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.materia-admin',
                    Compact('materias'));
    }

    /**
     * Agrega los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function store(Request $request)
    {
        //La variable datosMateria guardara los datos obtenidos menos el token.
        $datosMateria = request()
                        ->except('_token');
        //En el modelo se insertaran los datos de la variable datosMateria.
        Materia::insert($datosMateria);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('materia');
    }


    /**
     * Muestra la vista donde se editaran los datos
     */
    public function edit($id)
    {
        $materia = Materia::findOrFail($id);
        //Asigna la vista a mostrar con la variable declarada anteriormente.
        return view('admin.materia-admin',
                compact('materia'));
    }

    /**
     * Modifica los datos obtenidos a su respectiva tabla en la base de datos.
     */
    public function update($id)
    {
        //la variable datosMateria guardara los datos obtenidos menos el token y el metodo.
        $datosMateria = request()
                        ->except(['_token', '_method']);
        //en el modelo se modificaran los datos de la variable datosMateria teniendo en cuenta su id
        Materia::where('id', '=', $id)
                        ->update($datosMateria);
        //se hara su redireccionamiento al index de este controlador
        return redirect('materia');
    }

    /**
     * Elimina los datos en su respectiva tabla en la base de datos.
     */
    public function destroy($id)
    {
        //En el modelo se eliminara los datos que contenga el identificardor determinado.
        Materia::destroy($id);
        //Se hara su redireccionamiento al index de este controlador.
        return redirect('materia');
    }
}

<?php

namespace App\Http\Controllers;

/**
* Controlador Login
* Procesos que se realizaran al momento de realizar el login
* 
* @author    Veronica Lisseth Dussan Parra
* @since     11 de noviembre del 2021
*/
class LoginController extends Controller
{
    /**
     * muestra la vista login.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Verificacion del login.
     */
    public function store()
    {
        //Verificacion de la existencia de los datos requeridos.
        if (auth()
            ->attempt(request(['email',
                                'password'])) == false) {
            return back()->withErrors([
            //mensaje de que retorna al ser incorrecta
                'message' => 'Datos incorrectos, intentelo de nuevo'
            ]);
        };
        //Segun el rol que se obtenga se direcciona a una vista
        if (auth()->user()->rol_id == '1') {
            return redirect()->to('/admin');
        // } elseif (auth()->user()->rol_id == '2') {
        //     return redirect()->to('/docente');
        // } elseif (auth()->user()->rol_id == '3') {
        //     return redirect()->to('/profesorAsignado');
        }
    }

    /**
     * Cerrar sesion del login.
     */
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('login');
    }
}

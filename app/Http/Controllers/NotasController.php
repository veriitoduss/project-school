<?php

namespace App\Http\Controllers;

use App\Models\NotasModel;
use Illuminate\Http\Request;

/**
* vista notas
* control los procesos que se realizaran de las notas de los estudiantes por periodo
* 
* @author    Veronica Lisseth Dussan Parra
* @since     22 de septiembre del 2020
*/
class NotasController extends Controller
{
    /**
     * muestra la vista de las notas de los estudiantes
     */
    public function index()
    {
        return view('teacher/notes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function show(NotasModel $notasModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NotasModel $notasModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotasModel $notasModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotasModel  $notasModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotasModel $notasModel)
    {
        //
    }
}

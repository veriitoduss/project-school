<?php

namespace App\Http\Controllers;

use App\Models\NotasPruebaSaberModel;
use Illuminate\Http\Request;
    /**
     * controlador pruebas saber
     * muestra los procesos que se realizaran para las notas de las pruebas saber
     * 
     * @author    Veronica Lisseth Dussan Parra
     * @since     22 de septiembre del 2020
     */
class NotasPruebaSaberController extends Controller
{
    /**
     * muestra la vista de las notas de las notas de las pruebas saber
     */
    public function index()
    {
        return view('teacher/notes-saber');
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
     * @param  \App\Models\NotasPruebaSaberModel  $notasPruebaSaberModel
     * @return \Illuminate\Http\Response
     */
    public function show(NotasPruebaSaberModel $notasPruebaSaberModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NotasPruebaSaberModel  $notasPruebaSaberModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NotasPruebaSaberModel $notasPruebaSaberModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NotasPruebaSaberModel  $notasPruebaSaberModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotasPruebaSaberModel $notasPruebaSaberModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NotasPruebaSaberModel  $notasPruebaSaberModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotasPruebaSaberModel $notasPruebaSaberModel)
    {
        //
    }
}

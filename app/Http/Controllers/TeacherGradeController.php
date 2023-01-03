<?php

namespace App\Http\Controllers;

use App\Models\TeacherGradeModel;
use Illuminate\Http\Request;
/**
* controlador profesores directores de clase
* muestra las procesos que se realizaran para los profesores directores de grado
* 
* @author    Veronica Lisseth Dussan Parra
* @since     14 de octubre del 2020
*/
class TeacherGradeController extends Controller
{
    /**
    * muestra la pagina principal que le aparecera a los profesores directores de grado
    */
    public function index()
    {
        return view('teacher/teacher-grade/index');
    }
    /**
    * muestra la pagina donde veran la notas pruebas saber del grado asignado
    */
    public function pruebasaber()
    {
        return view('teacher/teacher-grade/notes-saber-grade');
    }
    /**
    * muestra la pagina donde veran la notas del grado asignado
    */
    public function consolidado()
    {
        return view('teacher/teacher-grade/notes-grade');
    }
    /**
    * muestra la pagina donde veran la lista de los alumnos del grado asignado
    */
    public function listagrade()
    {
        return view('teacher/teacher-grade/grade');
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
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function show(TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function edit(TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeacherGradeModel $teacherGradeModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeacherGradeModel  $teacherGradeModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeacherGradeModel $teacherGradeModel)
    {
        //
    }
}

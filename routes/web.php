<?php

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\AsignacionAGController;
use App\Http\Controllers\LoginController;


use App\Http\Controllers\AsignacionDMGController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TeacherGradeController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\NotasPruebaSaberController;



Route::get('/', function () {
    // return view('teacher/teacher-grade/profile');
    // return view('teacher/notes');
    // return view('navs/teacher');
    return view('login');
});
//profesor
Route::get('/profile', function () {
    return view('teacher/profile');
});
Route::get('/notes', function () {
    return view('teacher/notes');
});
Route::get('/notesaber', function () {
    return view('teacher/notes-saber');
});

//profesor-director
Route::get('/index-teacher-grade', function () {
    return view('teacher/teacher-grade/index');
});
Route::get('/profile-teacher', function () {
    return view('teacher/teacher-grade/profile');
});
Route::get('/grade', function () {
    return view('teacher/teacher-grade/grade');
});
Route::get('/notesgrade', function () {
    return view('teacher/teacher-grade/notes-grade');
});
Route::get('/notesabergrade', function () {
    return view('teacher/teacher-grade/notes-saber-grade');
});
Route::get('/informesabergrade', function () {
    return view('teacher/teacher-grade/informe-notes-saber-grade');
});
Route::get('/graficasabergrade', function () {
    return view('teacher/teacher-grade/grafica-notes-saber-grade');
});

Route::get('/notesdirector', function () {
    return view('teacher/teacher-grade/notes');
});

Route::get('/notesaberdirector', function () {
    return view('teacher/teacher-grade/notes-saber');
});
//admin
Route::get('/administrador', function () {
    return view('admin/index');
});
Route::get('/asignacionag', function () {
    return view('admin/asignacion-ag');
});
Route::get('/asignacionpgm', function () {
    return view('admin/asignacion-pgm');
});
// Route::get('/gradosadmin', function () {
//     return view('admin/grades-admin');
// });
Route::get('/materiaadmin', function () {
    return view('admin/materia-admin');
});
Route::get('/alumnoadmin', function () {
    return view('admin/alumnos/alumnos-admin');
});
Route::get('/addalumnoadmin', function () {
    return view('admin/alumnos/add');
});
Route::get('/teacheradmin', function () {
    return view('admin/teachers/teacher-admin');
});
Route::get('/addteacheradmin', function () {
    return view('admin/teachers/add');
});

Route::get('/prueba', function () {
    return view('prueba/prueba');
});


Route::resource('user',UserController::class);
Route::resource('notas-pruebas-saber',NotasPruebaSaberController::class);
Route::resource('notas',NotasController::class);
Route::resource('teachergrade',TeacherGradeController::class);
Route::resource('asginacionDMG',AsignacionDMGController::class);

//login
Route::resource('login',LoginController::class);
Route::get('logout',[LoginController::class,'destroy'])->name('login.destroy');

Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/docente', function () {
    return view('teacher.index');
});
Route::get('/profesorAsignado', function () {
    return view('teacher.teacher-grade.index');
});






//ya
Route::resource('asginacionAG',AsignacionAGController::class);//listo
Route::resource('estudiante',EstudianteController::class);//listo
Route::resource('profesor',ProfesorController::class);//listo
Route::resource('materia',MateriaController::class);//listo
Route::resource('grado',GradeController::class); //listo

//prueba

Route::post('/operacion', function (HttpRequest $request){
    $operaciones=$request->Numero_uno+$request->Numero_dos;
    $request->offsetSet('operacion', $operaciones);
    // return view('prueba.resultado',['operacion'=>$request->$operaciones]);
    // return view('prueba.resultado',['operacion'=>$request->$operaciones]);
    return view('prueba.resultado', compact('operaciones'));

});
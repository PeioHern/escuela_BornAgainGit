<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
})->name('home');

//(crear, ver, modificar, eliminar)

//VER
Route::get('/listaAlumnos', [AlumnoController::class, 'listaAlumnos'])->name('alumnos.listaAlumnos');

//CREAR
Route::get('/createAlumno', function () {
    return view('alumnos.createAlumno');
})->name('alumnos.createAlumno');
Route::post('/storeAlumno', [AlumnoController::class, 'storeAlumno'])->name('storeAlumno');

//MODIFICAR (boton)
Route::get('/editAlumno/{id}', [AlumnoController::class, 'editAlumno'])->name('alumnos.editAlumno');
Route::put('/updateAlumno/{alumno}', [AlumnoController::class, 'updateAlumno'])->name('updateAlumno');

//ELIMINAR (boton)
Route::get('/confirmAlumno/{id}', [alumnoController::class, 'confirmAlumno'])->name('alumnos.confirmAlumno');
Route::delete('/deleteAlumno/{alumno}', [alumnoController::class, 'deleteAlumno'])->name('deleteAlumno');

Route::post('/searchAlumnos', [AlumnoController::class, 'searchAlumnos'])->name('searchAlumnos');









//extra asf
Route::get('/showAlumnos/{id}', [AlumnoController::class, 'showAlumnos'])->name('alumnos.showAlumnos');
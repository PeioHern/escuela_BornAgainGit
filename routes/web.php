<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/listaAlumnos', [AlumnoController::class, 'listaAlumnos'])->name('alumnos.listaAlumnos');
Route::get('/showAlumnos/{id}', [AlumnoController::class, 'showAlumnos'])->name('alumnos.showAlumnos');

Route::get('/createAlumno', [AlumnoController::class, 'createAlumno'])->name('alumnos.createAlumno');
Route::post('/storeAlumno', [AlumnoController::class, 'storeAlumno'])->name('storeAlumno');

Route::get('/editAlumno/{id}', [AlumnoController::class, 'editAlumno'])->name('alumnos.editAlumno');
Route::put('/updateAlumno/{alumno}', [AlumnoController::class, 'updateAlumno'])->name('updateAlumno');

Route::get('/confirmAlumno/{id}', [alumnoController::class, 'confirmAlumno'])->name('alumnos.confirmAlumno');
Route::delete('/deleteAlumno/{alumno}', [alumnoController::class, 'deleteAlumno'])->name('deleteAlumno');

Route::post('/searchAlumnos', [AlumnoController::class, 'searchAlumnos'])->name('searchAlumnos');
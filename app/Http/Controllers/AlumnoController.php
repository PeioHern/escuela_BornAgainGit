<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function listaAlumnos()
    {

        $alumnos = Alumno::all();
        return view('alumnos.listaAlumnos', ['alumnos' => $alumnos]);
    }

    public function showAlumnos($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.showAlumnos', compact('alumno'));
    }






    // public function createAlumno()
    // {

    //     return view('alumnos.createAlumno');
    // }


    public function storeAlumno(Request $request)
    {
        $alumno = new Alumno();

        $alumno->nombre_ape = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        $alumno->save();

        return redirect()->route('home');
    }








    public function editAlumno($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.editAlumno', compact('alumno'));
    }

    public function updateAlumno(Request $request, Alumno $alumno)
    {
        $alumno->nombre_ape = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;

        $alumno->save();

        return redirect()->route('alumnos.listaAlumnos');
    }












    public function confirmAlumno($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.confirmAlumno', compact('alumno'));
    }



    public function deleteAlumno(Alumno $alumno)
    {
        $alumno->delete();

        return redirect()->route('alumnos.listaAlumnos');
    }







    public function searchAlumnos(Request $request)
    {
        $query = $request->input('searchName');

        $alumnos = Alumno::where('nombre_ape', 'like', '%' . $query . '%')->get();

        return view('alumnos.listaAlumnos', compact('alumnos'));
    }








    
}

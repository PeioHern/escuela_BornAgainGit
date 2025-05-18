@extends('layouts.plantilla')

@section('content')

<form action="{{ route('deleteAlumno', $alumno)}}" method="POST">
    @csrf
    @method('delete')

    <br>
    <legend>deseas eliminar el alumno {{$alumno->nombre_ape}}?</legend>
    <br>

    <a href="{{route('alumnos.listaAlumnos')}}">volver</a>
    <input type="submit" value="eliminar">
    <br><br>
 
</form>

@endsection

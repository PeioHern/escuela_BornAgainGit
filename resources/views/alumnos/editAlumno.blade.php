@extends('layouts.plantilla')

@section('content')

<form action="{{ route('updateAlumno', $alumno)}}" method="POST" class="modificarAlumno">
    @csrf

    @method('put')
    <legend>nombre y apellidos:</legend>
    <input type="text" name="nombre" id="" value="{{$alumno->nombre_ape}}">
    <legend>edad</legend>
    <input type="number" name="edad" id="" value="{{$alumno->edad}}">
    <legend>telefono:</legend>
    <input type="text" name="telefono" id="" value="{{$alumno->telefono}}">
    <legend>direccion:</legend>
    <input type="text" name="direccion" id="" value="{{$alumno->direccion}}">
    <input type="submit" value="modificar">
</form>

@endsection

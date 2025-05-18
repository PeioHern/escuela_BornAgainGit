@extends('layouts.plantilla')

@section('content')

<form action="{{ route('storeAlumno')}}" method="POST" class="agregarAlumno">
    @csrf
    <legend>nombre y apellidos:</legend>
    <input type="text" name="nombre" id="">
    <legend>edad</legend>
    <input type="number" name="edad" id="">
    <legend>telefono:</legend>
    <input type="text" name="telefono" id="">
    <legend>direccion:</legend>
    <input type="text" name="direccion" id="">
    <input type="submit" value="Agregar">
</form>

@endsection

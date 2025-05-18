@extends('layouts.plantilla')

@section('content')

    <h2>LISTADO DE ALUMNOS</h2>
    <table id="alumnos">
        <tr>
            <th>Nombre </th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>

        
            <tr>
                <td> {{ $alumno->nombre_ape }}</td>
                <td> {{ $alumno->edad }}</td>
                <td> {{ $alumno->telefono }}</td>
                <td> {{ $alumno->direccion }}</td>
                <td><button class="editar"><a href="{{ route('alumnos.editAlumno', $alumno->id) }}"> Editar </a></button></td>
                <td><button class="borrar"> <a href="{{ route('alumnos.confirmAlumno', $alumno->id) }}"> Borrar </a> </button></td>
            </tr>
      

    </table>

@endsection

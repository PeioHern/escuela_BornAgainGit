@extends('layouts.plantilla')

@section('content')
    <h2>LISTADO DE ALUMNOS</h2>


    <form action="{{ route('searchAlumnos') }}" method="POST">
        @csrf
        <input type="text" name="searchName" placeholder="Search by name">
        <button type="submit">Search</button>
        <br><br>
    </form>

    <table id="alumnos">
        <tr>
            <th>Nombre </th>
            <th>Edad</th>
            <th>Telefono</th>
            <th>Direccion</th>
        </tr>

        @foreach ($alumnos as $alumno)
            <tr>
                <td> <a href="{{ route('alumnos.showAlumnos', $alumno->id) }}"> {{ $alumno->nombre_ape }}</a></td>
                <td> {{ $alumno->edad }}</td>
                <td> {{ $alumno->telefono }}</td>
                <td> {{ $alumno->direccion }}</td>
                <td><button class="editar"><a href="{{ route('alumnos.editAlumno', $alumno->id) }}"> Editar </a></button></td>
                <td><button class="borrar"> <a href="{{ route('alumnos.confirmAlumno', $alumno->id) }}"> Borrar </a>
                    </button></td>
            </tr>
        @endforeach

    </table>
@endsection

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $alumno = new Alumno();
        $alumno->nombre_ape = "Sai Seen";
        $alumno->edad = 21;
        $alumno->telefono = "123456789";
        $alumno->direccion = "fake direction 321";
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre_ape = "Steven Strange";
        $alumno->edad = 22;
        $alumno->telefono = "123456789";
        $alumno->direccion = "fake direction 321";
        $alumno->save();

        $alumno = new Alumno();
        $alumno->nombre_ape = "Susan Storm";
        $alumno->edad = 23;
        $alumno->telefono = "123456789";
        $alumno->direccion = "fake direction 321";
        $alumno->save();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    use HasFactory;
    protected $table = "alumnos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_ape', 'edad', 'telefono', 'dirección'];
    protected $hidden = ['id'];







// Estas dos funciones son solo de ejemplo, las reales estan en el alumoController

    // public function obtenerAlumnos(){
    //     return Alumno::all();
    // }


    // public function obtenerAlumnoPorId($id){
    //     return Alumno::find($id);
    // }


}

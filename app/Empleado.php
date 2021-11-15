<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $fillable=['Nombre','Apellido','Correo','Telefono','Cultivo','Municipio'];
}

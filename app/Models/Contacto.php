<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $fillable = ['nombre','correo','mensaje']; // esto se hace para declarar que campos de la tabal puede llebnar el usario como proteccion contra asignacion masiva
}

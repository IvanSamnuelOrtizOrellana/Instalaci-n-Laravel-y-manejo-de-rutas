<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Se crea la tabla 'contactos' con los campos necesarios para almacenar la información del formulario de contacto
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->id(); // es el id de la tabala que creara automaticamente un numero incremental cada vez que se cree un nuevo registro
            $table->string ('nombre');
        $table->string ('correo');
        $table->string ('mensaje');
        
            $table->timestamps(); // crea dos columnnas que indican el tiempo de creacion y actualizacion del registro
        
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //  un metodo que elimina la tabla 
    {
        Schema::dropIfExists('contactos');
    }
};

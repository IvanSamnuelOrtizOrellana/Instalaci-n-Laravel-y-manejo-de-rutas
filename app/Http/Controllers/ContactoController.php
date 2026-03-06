<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
  public function contacto()
  {
   return view('formulario-contacto'); 
  }
    public function formulario_contacto(Request $request) 
    {
       
       $validated =$request->validate([
       'nombre' => 'required|min:5',
       'correo' => 'required|email',
       'mensaje'=> 'required|min:10'
       ]);
       Contacto::create($validated);
       
    return back()->with('success','formulario recibido');

    }

   
}
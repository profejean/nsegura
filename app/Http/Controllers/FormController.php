<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FormRequestValidate;
use App\Models\Programador;
use Carbon\Carbon;
 


class FormController extends Controller
{
    
    public function form(FormRequestValidate $request)
    {

        $nuevo_programador = new Programador();
        $nuevo_programador->nombre = $request->get('nombre');
        $nuevo_programador->apellido = $request->get('apellido');
        $nuevo_programador->cedula = $request->get('cedula');
        $nuevo_programador->correo = $request->get('correo');
        $nuevo_programador->lenguajes = $request->get('lenguajes');
        $nuevo_programador->fecha_creacion = Carbon::now();
        $nuevo_programador->save();
        
        $programador = Programador::orderBy('id','desc')->get();
       return response()->json($programador);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function sendEmail(Request $request) {

        $nuevo = new Formulario;
        $nuevo->nombre = $request->nombre;
        $nuevo->email = $request->email;
        $nuevo->asunto = $request->asunto;
        $nuevo->mensaje = $request->mensaje;
        $nuevo->save();
        return redirect('/');
        
    }
}

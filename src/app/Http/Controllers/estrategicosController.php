<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Rol;

class estrategicosController extends Controller
{
    function productos_fechaVencimiento(){
        $usuarios = Auth::user();
        return view('reportes-estrategicos.productos_fechaVencimiento',['usuarios' => $usuarios]);
    }
    function productos_estacion(){
        $usuarios = Auth::user();
        return view('reportes-estrategicos.productos_estacion',['usuarios' => $usuarios]);
    }
    function comparacion_compras(){
        $usuarios = Auth::user();
        return view('reportes-estrategicos.comparacion_compras',['usuarios' => $usuarios]);
    }
    function productos_margenUtilidad(){
        $usuarios = Auth::user();
        return view('reportes-estrategicos.productos_margenUtilidad',['usuarios' => $usuarios]);
    }
    
}
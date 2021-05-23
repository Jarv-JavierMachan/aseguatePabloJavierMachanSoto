<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function crear_cliente(Request $request){
        $cliente = cliente::created($request->all());
        return response()->json($cliente, 201);
    }
}

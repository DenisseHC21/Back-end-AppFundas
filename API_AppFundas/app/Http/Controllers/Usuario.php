<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    //
    //LISTAR TODOS LOS REGISTROS 
    public function list() {
        $usuario = Usuario::get();
        return response()->json($usuario);
    }

    //LISTAR UN REGISTRO EN ESPECIFICO
    public function show(Usuario $usuario) {
        return response()->json($usuario);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(UsuarioRequest $request) {
        Usuario::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Curso creado con éxito'
        ], 200);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Usiario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    //Controlador

    //LISTAR UN REGISTRO EN ESPECIFICO
    public function show(Usiario $usuario) {
        return response()->json($usuario);
    }

    //ACTUALIZAR UN REGISTRO 
    public function update(Request $request, Usiario $usuario) {
        $usuario->update($request->all());
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Usuario actualizado correctamente'
        ], 200);
    }

    //ELIMINAR UN REGISTRO DE MANERA LÓGICA
    public function destroy(Usiario $usuario) {
        $usuario->delete();
        return response()->json([
            'res' => 'true',
            'mensaje' => 'Usuario eliminado correctamente'
        ], 200);
    }

}

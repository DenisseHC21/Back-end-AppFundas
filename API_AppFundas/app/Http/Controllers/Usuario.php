<?php

namespace App\Http\Controllers;

use App\Models\Usiario;
use Illuminate\Http\Request;

class Usuario extends Controller
{
    //
    //LISTAR TODOS LOS REGISTROS 
    public function list() {
        $usuario = Usiario::get();
        return response()->json($usuario);
    }

    //CREAR UN NUEVO REGISTRO
    public function store(UsiarioRequest $request) {
        Usiario::create($request->all());
        return response()->json([
            'res' => true,
            'msg' => 'Curso creado con éxito'
        ], 200);
    }

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

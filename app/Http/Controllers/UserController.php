<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {

    }

    protected function ConsultarUsuarios(Request $request)
    {
        $Usuarios = User::with("direccion")->get();

        $ArrUsuarios = array_map(function($Usuario) {
            $Usuario["edad"] = \Carbon\Carbon::parse($Usuario["fecha_nacimiento"])->age;
            return $Usuario;
        }, $Usuarios->toArray());

        return response()->json($ArrUsuarios);
    }
}

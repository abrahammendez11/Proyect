<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate
        ([
            'nombre' => 'required|max:50',
            'correoElectronico' => 'required|max:50',
            'contraseña' => 'required|max:40',
        ]);

        

    }
}

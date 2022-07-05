<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login(Request $request){

        $phone_number = User::where('phone_number', $request->phone_number)
            ->where('password', $request->password)
            -> first();

        if($phone_number){

            return response([
                "mensaje" => "usuario logeado correctamente",
                "phone_number" => $phone_number


            ]);
        }
        else
        {
            return response([
                "mensaje" => "El usuario o clave incorrectos"
            ]);
        }

    }
}

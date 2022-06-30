<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function messageApi($phone)
    {
        $message = "Increíble, hemos registrado tu número celular con éxito, disfruta de FoundLove!";

        $url = "http://127.0.0.1:3000/welcomeMessage?phone=".$phone."&message=".$message;
        $response = Http::post($url);
        return $response;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function extractAge(){

        $ages = User::select('age')->get();
        return $ages;
        
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function show(){

        return 'liste des messages meowController';
    }
    public function showId(int $id){
        return $id;
    }
}

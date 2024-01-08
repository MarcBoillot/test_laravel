<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function show(){

        return view('meows-list');
    }
    public function showId(int $id){
        return view('meow-details',['id'=> $id]);
    }
}

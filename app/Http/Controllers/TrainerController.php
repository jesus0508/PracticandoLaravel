<?php

namespace LaraDex\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //
    public function prueba($id='No mandaste nada desgraciado'){
        return view('trainer',['id'=>$id]);
    }
}

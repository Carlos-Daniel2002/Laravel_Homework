<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseSixController extends Controller
{
    function getView(Request $request){
        return view('E6.exercise6');
            
    }

    function Information(Request $request){
        return view('E6.result6', ['primo' => $request->get('primo')]);
       
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseOneController extends Controller
{
    function getView(Request $request){
        return view('E1.exercise1');
              
    }

    function Information(Request $request){
        return view('E1.result1', ['age' => $request->get('age')]);
       
    }
}

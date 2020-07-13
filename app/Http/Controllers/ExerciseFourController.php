<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseFourController extends Controller
{
    function getView(Request $request){
        return view('E4.exercise4');
             
    }
    
    function Information(Request $request){
        return view('E4.result4', ['number' => $request->get('number')]);
       
    }
}

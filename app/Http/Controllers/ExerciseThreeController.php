<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseThreeController extends Controller
    {
        function getView(Request $request){
            return view('E3.exercise3'); 
                
        }

        function Information(Request $request){
            return view('E3.result3', ['number' => $request->get('number')]);
           
        }
    }
    

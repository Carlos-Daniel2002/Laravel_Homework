<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseEightController extends Controller
{
    function getView(Request $request){
        return view('E8.exercise8');  
    }
    
    function Information(Request $request){
        return view('E8.result8', ['start'  => $request->get('year'),'end'  => $request->get('year2')]);
       
    }
}

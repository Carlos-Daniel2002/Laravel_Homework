<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseFiveController extends Controller
    {
        function getView(Request $request){
            return view('E5.exercise5');     
        }

    function Information(Request $request)
    {
        $answers = explode(',', $request->get('ages'));
        $arrAges = [];
        $ages = [];
        for ($i = 0; $i < count($answers); $i++) {
            if (isset($arrAges[$answers[$i]])) {
                $arrAges[$answers[$i]]++;
            } else {
                $arrAges[$answers[$i]] = 1;
            }
            if (!in_array($answers[$i], $ages)) {
                $ages[] = $answers[$i];
            }
        }
        return view(
            'E5.result5',
            [
                'ages' => $ages,
                'arrAges' => $arrAges,
                'answers' => $answers
            ]
        );
    }
}

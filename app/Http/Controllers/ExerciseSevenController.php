<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseSevenController extends Controller
{
    function getView(Request $request){
        return view('E7.exercise7');
          
    }

    function Information(Request $request){

$books = [ 'El Código da Vinci', 'Crepúsculo', 'El Alquimista ', 'Divina Comedia', 
'Las mil y una noches', 'Cuentos infantiles', 'IT', 'Guerra y paz', 'La isla', 'Frankenstein', 'La ladrona de libros'];

$reading = [];
$notReading = [];

for ($i = 0; $i < count($books); $i++) {
    if (rand(0, 1) == 0) {
        $reading[] = $books[$i];
    } else {
        $notReading[] = $books[$i];
    }
}


    return view(
        'E7.result7',
        [
            'reading' => $reading ,
            'notReading' => $notReading
        ]
    );
}
}

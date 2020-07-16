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
'Las mil y una noches', 'Cuentos infantiles', 'IT', 'Guerra y paz', 'La isla', 'Frankenstein',
 'La ladrona de libros','La Guerra','Libro A','Libro B','Libro C','Libro D'];

$reading = [];
$notReading = [];
$count = $request -> numberp;

for ($i = 0; $i < $count; $i++) {
     $rand = array_rand($books);
        $reading[] = $books[$rand];
    unset($books[$rand]);
    if ($i == $count -1){
        foreach($books as $n){
            $notReading[] = $n;
}
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

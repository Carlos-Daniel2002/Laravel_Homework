<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    function Home1(Request $request)
    {
    $cities = DB::table('cities')
    ->select('name AS cities')
    ->orderBy('cities', 'ASC')
    ->get();

    //var_dump($cities);
    }
//--------------------------------------------------
    function Home2(Request $request)
    {
    $cities = DB::table('cities')
    ->select('name AS cities')
    ->orderBy('cities', 'DESC')
    ->get();

    //var_dump($cities);       
    }
//--------------------------------------------------
    function Home3(Request $request)
    {
    $countries = DB::table('countries')
    ->select('name_en AS english_name' , 'name AS spanish_name')
    ->orderByRaw('spanish_name ASC, english_name ASC')
    ->get();

    //var_dump($countries);       
    }
//--------------------------------------------------
    function Home4(Request $request)
    {
    $cities = DB::table('cities')
    ->select('*')
    ->where('name','LIKE',"San %")
    ->get();

    //var_dump($cities);       
    }
//--------------------------------------------------
    function Home5(Request $request)
    {
    $countries = DB::table('countries')
    ->select('id')
    ->where('name','Guatemala')
    ->get();

    //var_dump($countries);       
    }
//--------------------------------------------------
    function Home6(Request $request)
    {
    $countries = DB::table('states')
    ->select('name AS states')
    ->where('country_id', 70)
    ->orderBy('name')
    ->get();
    
    //var_dump($countries);       
    }
//--------------------------------------------------
    function Home7(Request $request)
    {
    $students = DB::table('students')
    ->select('email','primer_nombre','primer_apellido')
    ->where('teléfono','LIKE',"6%")
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home8(Request $request)
    {
    $students = DB::table('students')
    ->select('carrera')
    ->where('carrera','LIKE','Ingeniería%')
    ->count();

    //var_dump($students);       
    }
//--------------------------------------------------
    public function Home9()
    {
    $students = DB::table('students')
    ->select('primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'nota_paes')
    ->where('carrera', 'Ingeniería en Sistemas')
    ->whereBetween('ano_ingreso', [2000, 2010])
    ->orderBy('nota_paes', 'ASC')
    ->get();

    //var_dump($students);  
    }
//--------------------------------------------------
    function Home10(Request $request)
    {
    $students = DB::table('students')
    ->avg('nota_paes');

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home11(Request $request)
    {
    $students = DB::table('students')
    ->avg('nota_admision');

    //var_dump($students);       
    }
//--------------------------------------------------
function Home12(Request $request)
    {
    $students = DB::table('students')
    
    ->select(DB::raw('((nota_paes + nota_admision)/2) AS promedio_nota_de_admision'))
    ->orderBy('promedio_nota_de_admision','DESC')
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home13(Request $request)
    {
    $students = DB::table('students')
    ->select('primer_nombre','primer_apellido','teléfono','nota_paes')
    ->orderBy('nota_paes','DESC')
    ->limit(20)
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home14()
    {
    $students=DB::table('students')
    ->select('carrera', DB::raw("avg(nota_admision) AS 'promedio_nota_admision'"))
    ->groupBy('carrera')
    ->get();
    
    //var_dump($students);     
    }
//--------------------------------------------------
    function Home15()
    {
        $students = DB::table('students')
        ->select('ano_ingreso', DB::raw('count(*) AS total_registros'))
        ->groupBy('ano_ingreso')
        ->get();

    //var_dump($students);
    }
//--------------------------------------------------
    function Home16(Request $request)
    {
    $students = DB::table('students')
    ->select('primer_nombre AS student','nota_paes')
    ->where('nota_paes','<','6')
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home17(Request $request)
    {
    $students = DB::table('students')
    ->select('primer_nombre AS student','nota_paes','nota_admision')
    ->where('nota_paes','<','6')
    ->orWhere('nota_admision','<','6')
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home18(Request $request)
    {
    $students = DB::table('students')
    ->select('carrera', DB::raw("min(nota_admision) AS nota_de_admision_mas_baja"))
    ->groupBy('carrera')
    ->orderBy('nota_de_admision_mas_baja','ASC')
    ->get();

    //var_dump($students);       
    }

//--------------------------------------------------
    function Home19(Request $request)
    {
    $students = DB::table('students')
    ->select('carrera', 'nota_paes')
    ->where('nota_paes', '>','7')
    ->orderBy('nota_paes', 'DESC')
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
    function Home20(Request $request)
    {
    $students = DB::table('students')
    ->select('*')
    ->where('primer_apellido', 'LIKE', "A%")
    ->where('email', 'LIKE', "%gmail.com%")
    ->where('ano_ingreso', '<', 2010)
    ->where('nota_paes + nota_admision', '>=', 11)
    ->orderByRaw('primer_apellido , segundo_apellido')
    ->get();

    //var_dump($students);       
    }
//--------------------------------------------------
   function Home21(Request $request)
    {
    $countries = DB::table('countries')
    ->select('id','name')
    ->wherein('name',['Nicaragua','Belice','Costa Rica','Guatemala','Honduras','El salvador','Panamá'])
    ->get();

    //var_dump($countries);       
    }
//--------------------------------------------------
    function Home22(Request $request)
    {
    $states = DB::table('states')
    ->select('country_id',DB::raw("count('country_id') AS 'cantidad_de_estados'"))
    ->whereIn('country_id',[4,30,70,90,99,154,159])
    ->groupBy('country_id')
    ->get(); 

    //var_dump($states); 
    }
//--------------------------------------------------
    function Home23(Request $request)
    {
    $states = DB::table('states')
    ->select('id','name')
    ->where('country_id','90')
    ->get();

    //var_dump($states);       
    }
//--------------------------------------------------
    function Home24()
    {
    $students = DB::table('cities')
    ->select('state_id')
    ->addSelect(DB::raw("count('id') AS cantidad_de_estados"))
    ->whereIn('state_id',[1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
    ->groupBy('state_id')
    ->get();

    //var_dump($students);
    }
//--------------------------------------------------
    function Home25(Request $request)
    {
    $cities = DB::table('cities')
    ->select('state_id', 'name')
    ->whereIn('state_id', [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180])
    ->orderByRaw('state_id , name')
    ->get();

    //var_dump($cities);       
    }
 }
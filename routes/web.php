<?php

use Illuminate\Support\Facades\Route;

Route::get('/exercise1','ExerciseOneController@getView')->name('exercise1');
Route::post('/result1','ExerciseOneController@Information')->name('result1');
//-----------------------------------------------------------------------------
Route::get('/exercise2','ExerciseTwoController@getView')->name('exercise2');
Route::post('/result2','ExerciseTwoController@Information')->name('result2');

//-----------------------------------------------------------------------------
Route::get('/exercise3','ExerciseThreeController@getView')->name('exercise3');
Route::post('/result3','ExerciseThreeController@Information')->name('result3');

//-----------------------------------------------------------------------------
Route::get('/exercise4','ExerciseFourController@getView')->name('exercise4');
Route::post('/result4','ExerciseFourController@Information')->name('result4');

//-----------------------------------------------------------------------------
Route::get('/exercise5','ExerciseFiveController@getView')->name('exercise5');
Route::post('/result5','ExerciseFiveController@Information')->name('result5');

//-----------------------------------------------------------------------------
Route::get('/exercise6','ExerciseSixController@getView')->name('exercise6');
Route::post('/result6','ExerciseSixController@Information')->name('result6');

//-----------------------------------------------------------------------------
Route::get('/exercise7','ExerciseSevenController@getView')->name('exercise7');
Route::post('/result7','ExerciseSevenController@Information')->name('result7');

//-----------------------------------------------------------------------------
Route::get('/exercise8','ExerciseEightController@getView')->name('exercise8');
Route::post('/result8','ExerciseEightController@Information')->name('result8');

//-----------------------------------------------------------------------------

// Nueva Tarea de consultas
Route::get('/Home1','TaskController@Home1')->name('Home1');
Route::get('/Home2','TaskController@Home2')->name('Home2');
Route::get('/Home3','TaskController@Home3')->name('Home3');
Route::get('/Home4','TaskController@Home4')->name('Home4');
Route::get('/Home5','TaskController@Home5')->name('Home5');
Route::get('/Home6','TaskController@Home6')->name('Home6');
Route::get('/Home7','TaskController@Home7')->name('Home7');
Route::get('/Home8','TaskController@Home8')->name('Home8');
Route::get('/Home9','TaskController@Home9')->name('Home9');
Route::get('/Home10','TaskController@Home10')->name('Home10');
Route::get('/Home11','TaskController@Home11')->name('Home11');
Route::get('/Home12','TaskController@Home12')->name('Home12');
Route::get('/Home13','TaskController@Home13')->name('Home13');
Route::get('/Home14','TaskController@Home14')->name('Home14');
Route::get('/Home15','TaskController@Home15')->name('Home15');
Route::get('/Home16','TaskController@Home16')->name('Home16');
Route::get('/Home17','TaskController@Home17')->name('Home17');
Route::get('/Home18','TaskController@Home18')->name('Home18');
Route::get('/Home19','TaskController@Home19')->name('Home19');
Route::get('/Home20','TaskController@Home20')->name('Home20');
Route::get('/Home21','TaskController@Home21')->name('Home21');
Route::get('/Home22','TaskController@Home22')->name('Home22');
Route::get('/Home23','TaskController@Home23')->name('Home23');
Route::get('/Home24','TaskController@Home24')->name('Home24');
Route::get('/Home25','TaskController@Home25')->name('Home25');
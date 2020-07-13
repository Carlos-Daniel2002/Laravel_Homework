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
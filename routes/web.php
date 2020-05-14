<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/thankYou', function () {
    return view('thankYou');
});

//routes for questionnaires
Route::get('questionnaires/','QuestionnaireController@index')->name('questionnaires.index')->middleware('auth');
Route::get('questionnaires/create','QuestionnaireController@create')->name('questionnaires.create')->middleware('auth');
Route::post('questionnaires/store','QuestionnaireController@store')->name('questionnaires.store')->middleware('auth');
Route::get('questionnaires/{questionnaire}','QuestionnaireController@show')->name('questionnaires.show')->middleware('auth');


//routes for question
Route::get('questionnaires/{questionnaire}/questions/create','QuestionController@create')->name('questions.create')->middleware('auth');
Route::post('questionnaires/{questionnaire}/questions','QuestionController@store')->name('questions.store')->middleware('auth');
Route::delete('questionnaires/{questionnaire}/questions/{question}','QuestionController@destroy')->name('questions.delete')->middleware('auth');

//routes for survey 

Route::get('surveys/{questionnaire}-{slug}','SurveyController@show')->name('surveys.show');
Route::post('surveys/{questionnaire}-{slug}','SurveyController@store')->name('surveys.store');

//routes for Auth
Auth::routes();


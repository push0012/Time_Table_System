<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('classroom', 'ClassroomController');
Route::resource('course', 'CourseController');
Route::resource('lecturer', 'LecturerController');
Route::resource('lecturer_free', 'LecturerFreeController');
Route::resource('subject', 'SubjectController');
Route::resource('course_subject', 'CourseSubjectController');
Route::resource('time_slot', 'TimeSlotController');


Route::get('generate', 'TimeTableController@generate');

/*Route::get('/classroom', function(){ return view('master.classroom'); });
Route::get('/course', function(){ return view('master.course'); });*/
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

Route::get('/', 'MenuController@index');#call service instancy 


#students
Route::get('students', 'StudentsController@index');#call service instancy 
Route::post('students/edit','StudentsController@edit');
Route::post('students/del','StudentsController@del');
Route::post('students/add','StudentsController@add'); 
Route::get('students/view','StudentsController@view'); 


#courses
Route::get('course', 'CourseController@index');#call service instancy 
Route::post('course/edit','CourseController@edit');
Route::post('course/del','CourseController@del');
Route::post('course/add','CourseController@add'); 
Route::get('course/view','CourseController@view'); 
Route::get('course/find','CourseController@find'); 


#register
Route::get('register', 'RegisterController@index');#call service instancy 
Route::post('register/edit','RegisterController@edit');
Route::post('register/del','RegisterController@del');
Route::post('register/add','RegisterController@add'); 
Route::get('register/view','RegisterController@view'); 
Route::get('register/find','RegisterController@find'); 

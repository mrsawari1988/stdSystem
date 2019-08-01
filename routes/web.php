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

//Route::get('/', function () {
//    return view('student.addressregister');
//});


Route::group(['namespace' => 'Student' , 'prefix' => 'student'],function (){

    //Main Student Pnale
    //  Route::get('/panel','StudentController@panel')->name('student.panel');

    //Student Register Routes
      Route::get('/register','StudentController@studentRegister')->name('student.register');
      Route::post('/register','StudentController@studentStore')->name('student.store');
      //Route::get('/edit','StudentController@studentEdit')->name('student.edit');
      //Route::post('/edit','StudentController@studentUpdate')->name('student.update');

    //Student Register Routes
        Route::get('/father/register','StudentController@fatherRegister')->name('father.register');
        //Route::post('/father/register','StudentController@fatherStore')->name('father.store');
        //Route::get('/father/edit','StudentController@fatherEdit')->name('father.edit');
        //Route::post('/father/edit','StudentController@fatherUpdate')->name('father.update');

    //Student Register Routes
        Route::get('/mother/register','StudentController@motherRegister')->name('mother.register');
        //Route::post('/mother/register','StudentController@motherStore')->name('mother.store');
        //Route::get('/mother/edit','StudentController@motherEdit')->name('mother.edit');
        //Route::post('/mother/edit','StudentController@motherUpdate')->name('mother.update');

    //Student Register Routes
        Route::get('/address/register','StudentController@addressRegister')->name('address.register');
        //Route::post('/address/register','StudentController@addressStore')->name('address.store');
        //Route::get('/address/edit','StudentController@addressEdit')->name('address.edit');
        //Route::post('/address/edit','StudentController@addressUpdate')->name('address.update');


});

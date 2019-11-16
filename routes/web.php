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


Route::get('ID/{id}', function($id) {
    echo 'ID : '.$id;
});

Route::get('IDOpt/{id?}', function($id = "ID is not defined") {
    echo 'ID : '.$id;
});

Route::get('/testIndex', 'TestController@index'); //You can see that middleware is invoked
Route::get('/testOther', 'TestController@other'); //You can see that middleware is invoked here as well

Route::resource('/tesstRes', 'MyController');
Route::get('/seeReq/', 'TesstController@seeRequest');

class MyClass {
    public $mango = 'mangooooooo!!!';
}

Route::get('mango', 'TestController@mangoTest');

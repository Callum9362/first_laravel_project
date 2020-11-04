<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Example Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
   //Returns a name from a query parameter

   Route::get('/', function () {
       $name = request('name);
       return name;
    });

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

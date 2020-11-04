<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    $name = request('name');

    return view('test', [
        'name' => $name
    ]);
});

Route::get('/posts/{post}', 'PostsController@show');

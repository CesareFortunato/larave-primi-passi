<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $title = 'Homepage';
    $users = ['Mario', 'Luigi', 'Peach'];

    return view('home', compact('title', 'users'));
});

Route::get('/test1', function () {
    return view('test1');
});


Route::get('/test2', function () {
    return view('test2');
});
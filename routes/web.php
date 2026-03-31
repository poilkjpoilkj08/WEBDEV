<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    dd('Hello woe');
    return view('welcome');
});

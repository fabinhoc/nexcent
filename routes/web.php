<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/design-system', function () {
    return view('pages/design-system');
});

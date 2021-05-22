<?php

use Illuminate\Support\Facades\Route;

Route::get('/main',      function () { return view('main'); });
Route::get('/penalties', function () { return view('penalties'); });
Route::get('/auto', function () {      return view('auto'); });

// Route::get('/export',             function () { return view('export'); });
// Route::get('/fix',             	  function () { return view('fix'); });
// Route::get('/trafficregulations', function () { return view('trafficregulations'); });
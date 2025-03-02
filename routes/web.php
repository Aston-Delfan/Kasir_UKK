<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailPembelianController;

Route::get('/', function () {
    return view('welcome');
});

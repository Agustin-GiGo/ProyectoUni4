<?php

use App\Http\Controllers\Admin\InicioController;
use Illuminate\Support\Facades\Route;


Route::get('',  [InicioController::class, 'index']);
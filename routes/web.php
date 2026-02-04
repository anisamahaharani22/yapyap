<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YapyapController;

Route::get('/', [YapyapController::class, 'index']);


<?php

use App\Controllers\HomeController;
use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Filters\Sample;

Route::get('/', [HomeController::class, 'index'])->addMiddleware(Sample::class);

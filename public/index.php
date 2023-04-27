<?php
require_once '../bootstrap/bootstrap.php';

use App\Helpers\Env;
use Pecee\SimpleRouter\SimpleRouter as Route;

Env::load();

Route::setDefaultNamespace('\App\Controllers');
require_once BASE_PATH . 'config/routes.php';
Route::start();

<?php

/*
|--------------------------------------------------------------------------
| Web Custom Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$list = glob(app_path('Custom/*/routes.php'));

foreach ($list as $m) {
	require $m;
}
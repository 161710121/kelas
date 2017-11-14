<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// basic routing
Route::get('/', function () {
    return view('welcome');
});

route::get('/a', function () {
    return '<h1>Test</h1>'
    .'Welcome<br>'
    .'Goodbye.';
});

route::get('b/{nama}', function ($a) {
    return 'Nama <u>'.$a.'</u><br>';
});

route::get('c/{makan}/{minum}/{ngemil}', function ($a,$b,$c) {
    return 	'Makan <u>'.$a.'</u><br>'
    		.'Minun <u>'.$b.'</u><br>'
    		.'Ngemil <u>'.$c.'</u><br>';
});

route::get('d/{nama?}', function ($a = "John") {
    return $a;
});
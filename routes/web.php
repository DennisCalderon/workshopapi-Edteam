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

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    # Formas de hacer una encriptación en Laravel

    md5('cadena');
    echo "<br />";
    
    echo Hash::make('edteam');
    echo "<br />";

    echo bcrypt('secret');
    echo "<br />";


    $cadena = 'laravel';
    echo Crypt::encrypt($cadena); // encripta
    echo "<br />";
    //echo Crypt::decrypt($cadena); // desencripta pero necesitas agregar en el controlador: "use Illuminate\Support\Facedes\Crypt;"
    //return view('welcome');
});

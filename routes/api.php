<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
##Prefijo http://miruta/api/{metodo}


//la ruta seria -> http://workshopapi.test/api/user?api_token=XXXXXXXXXXXXXX
/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user(); // esto nos retorna la información del usuario mediante el token que usemos
});*/
Route::middleware('auth:api')->group(function() {
    Route::get('/products/all', 'ProductsController@index')->name('products.all'); // la ruta seria http://workshopapi.test/api/products/all?api_token=XXXXXXXXXXXXXX
    Route::get('/correo/basico', 'Mailcontroller@enviarBasico')->name('correo.basico'); // la ruta seria http://workshopapi.test/api/correo/basico?api_token=XXXXXXXXXXXXXX
        // el método debe de ser post(enviar) pero para fines del curso usaremos el método get para ver la respuesta

});

Route::get('welcome', function() {      // la ruta seria -> http://workshopapi.test/api/welcome
    return response()->json(['data' => 'Bienvenidos a workshop de Laravel', 'code' => 200]);
});

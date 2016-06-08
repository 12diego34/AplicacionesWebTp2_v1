<?php
use App\Plantilla;
use App\Carta;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Index */
Route::get('/', function () {
    return view('index');
});


Route::get('crear_plantilla',function(){
	return view('crearplantilla');
});

Route::get('plantillas/sancion', function(){
	return view('plantillas/sancion');
});

Route::get('plantillas/despido', function(){
	return view('plantillas/despido');
});

Route::get('plantillas/invitacion', function(){
	return view('plantillas/invitacion');
});
Route::get('plantillas/ausencia_de_trabajo', function(){
	return view('plantillas/ausencia_de_trabajo');
});

/* Authentication routes */

//login
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

//logout
Route::get('logout', 'Auth\AuthController@logout');

/* Registration routes */
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

//listado de plantillas
Route::post('crear','ModeloController@crear');

Route::get('listar_plantillas','ModeloController@mismodelos');

Route::get('plantillas/{id}','ModeloController@armarplantilla');

Route::get('plantillas/{id}/borrar','ModeloController@eliminar');

Route::get('listar_cartas','CartaController@cartas');

Route::get('cartas/{id}','CartaController@armarplantilla');
Route::get('cartas/{id}/borrar','CartaController@eliminar');

Route::get('descargar/{nombrearchivo}','PdfController@descargar');

//Route::get('busqueda','ModeloController@busqueda');
//crea carta y guarda pdf
Route::post('plantillas/guardar','PdfController@guardar');

Route::post('enviar', 'MailController@enviar');


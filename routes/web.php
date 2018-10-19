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

/*Route::get('home', function () {
    return view('home');
});
Route::get('login', function () {
    return view('login');
});
/*Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::resource('estilocontodo', 'EstilocontodoController');
/*Route::get('/Estilocontodo', function(){
    $estilocontodo = Estilocontodo::where('sexo','0')->get();
    dd($estilocontodo);
  });*/
/*Route::resource('estilocontodo', 'EstilocontodoController');
Route::get('reportes', 'PdfController@index');
Route::get('crear_reporte_porpais/{tipo}', 'PdfController@crear_reporte_porpais');

Route::get('listado_graficas', 'GraficasController@index');
Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('total_sexo', 'GraficasController@total_sexo');*/

/*Route::get('/', function () {
    return view('home.home');
});

Route::get('login', function () {
    return view('login.login');
});

Route::get('home', function () {
    return view('home.home');
});*/


/*Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 
// Registration routes...

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', ['as' => 'register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('home', 'HomeController@index');*/

//Auth
Route::redirect('/','entrevistas');
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//Publica
Route::get('entrevistas', 'Publica\PageController@entrevistas');
Route::get('sujetos', 'Admin\SujetosController@create');
Route::get('dieteticas', 'Admin\DieteticasController@create');
//Admin
 Route::resource('cuestionarios', 'Admin\CuestionariosController');
 Route::resource('sujetos', 'Admin\SujetosController');
 Route::resource('dieteticas', 'Admin\DieteticasController');

 Route::resource('adherencias', 'Admin\adherenciasController');

 Route::resource('comedors', 'Admin\ComedorsController');

 Route::resource('mostrar', 'Admin\MostrarsController');
 Route::resource('indices', 'Admin\IndicesController');

 Route::resource('registros', 'Admin\RegistrosController');
 Route::resource('lacteos', 'Admin\lacteosController');
 Route::resource('hucapes', 'Admin\hucapesController');
 Route::resource('verduras', 'Admin\verdurasController');
 Route::resource('frutas', 'Admin\frutasController');
 Route::resource('legumbres', 'Admin\legumbresController');
 Route::resource('bebidas', 'Admin\bebidasController');
 Route::resource('bollerias', 'Admin\bolleriasController');
 Route::resource('miscelaneas', 'Admin\miscelaneasController');
 Route::resource('aceites', 'Admin\aceitesController');
 Route::resource('clinicos', 'Admin\ClinicosController');
 Route::resource('vitamins', 'Admin\VitaminsController');



 Route::resource('dietas', 'Admin\DietasController');
 Route::resource('dantropometricos', 'Admin\DantropometricosController');
 Route::resource('estudios', 'Admin\EstudiosController');
 //Route::post('cuestionario', 'Cuestionarios\CuestionariosController@store');
/*Route::post('agregar_nuevo_sujeto', 'SujetosController@agregar_nuevo_sujeto');
//Route::get('agregar_nuevo_usuario', 'UserController@store');
Route::get('listado_sujetos/{page?}', 'ListadoController@listado_sujetos');
Route::get('form_editar_sujeto/{id}', 'SujetosController@form_editar_sujeto');
Route::post('editar_sujeto', 'SujetosController@editar_sujeto');
Route::post('subir_imagen_sujeto', 'SujetosController@subir_imagen_sujeto');
Route::post('cambiar_password', 'SujetosController@cambiar_password');
Route::get('form_cargar_datos_sujetos', 'SujetosController@form_cargar_datos_sujetos');
Route::post('cargar_datos_sujetos', 'SujetosController@cargar_datos_sujetos');
Route::get('form_antro_sujeto/{id}', 'DantropometricosController@form_antro_sujeto');
Route::post('agregar_antro_sujeto', 'DantropometricosController@agregar_antro');
Route::get('borrar_antro/{id}', 'DantropometricosController@borrar_antro');
Route::get('listado_graficas', 'GraficasController@index');
Route::get('grafica_registros/{anio}/{mes}', 'GraficasController@registros_mes');
Route::get('grafica_publicaciones', 'GraficasController@total_publicaciones');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

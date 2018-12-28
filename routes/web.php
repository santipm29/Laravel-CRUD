<?php


Route::get('/', function () {
    return view('layout');
});

Route::get('/usuarios', 'UserController@index')->name('usuarios');


Route::get('/usuarios/{id}', 'UserController@show')
    ->where('id', '[0-9]+')->name('usuarios.detalle');


Route::get('/usuarios/nuevo','UserController@create')->name('usuarios.crear');
Route::get('/usuarios/{user}/editar','UserController@edit')->where('id', '[0-9]+')->name('usuarios.editar');
Route::put('/usuarios/{user}','UserController@update');
Route::post('/usuarios/crear','UserController@store');
Route::delete('/usuarios/{user}' , 'UserController@destroy')->where('id', '[0-9]+')->name('usuarios.eliminar');

/*PUT:ACTUALIZAR POST:MANDAR DATOS GET:MOSTRAR_INFORMACION DELETE:ELIMINAR*/ 



//Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');

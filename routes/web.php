<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', ['as' => 'login', function() {
	return view('login.login');
}]);

Route::get('register', ['as' => 'register', function(){
	return view('login.register');
}]);

Route::resource('rol', 'RolControlador');

Route::resource('modulo', 'ModuloControlador');

Route::resource('formulario', 'FormularioControlador');

Route::post('autenticar', 'UsuariosControlador@autenticar');
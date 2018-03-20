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

Route::resource('paises', 'PaisController', ['parameters' => [
		'paises' => 'pais']]);

Route::resource('departamentos', 'DepartamentoController', ['parameters' => ['departamentos' => 'departamento']]);

/*Route::get('/depar', function(){
	return \App\Departamento::with('pais')->get();
});*/
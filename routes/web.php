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

Route::prefix('admin')->group(function(){
	Route::get('index', array('as' => 'index', 'uses' => 'PagesController@getIndex'));
	Route::get('admin', array('as' => 'admin', 'uses' => 'PagesController@getAdmin'));

	
	Route::resource('users', 'UserController', array('only' => ['index', 'edit', 'update', 'destroy']));

	Route::resource('markas', 'MarkaController', array('only' => ['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']));

	Route::resource('models', 'ModelController', array('only' => ['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']));
	
	Route::resource('brands', 'BrandController', array('only' => ['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']));

	Route::resource('cars', 'CarController', array('only' => ['index', 'create', 'store', 'edit', 'update', 'destroy', 'show']));

	

	Route::get('/', function () {
	    return view('auth.login');

	})->name('root');

	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');


});






//Redirects for login and logout
Route::get('/', function () {
	return redirect()->route('root');
});

Route::get('/home', function () {
	return redirect()->route('home');
});




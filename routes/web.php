<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login','dashboardController@login_check');

Route::post('/signup','dashboardController@signup');


Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/dashboard','dashboardController@dashboard');

    Route::get('/logout','dashboardController@logout');

    //Function to attach role
    Route::get('/attachRole/{role}','dashboardController@attachRole');
	Route::get('/admin', 'fac\QualController@admin');
	Route::get('fac', 'fac\QualController@index');
	Route::post('new', 'fac\QualController@newf');
	Route::post('fac/add', 'fac\QualController@store');
	Route::get('qdel/{id}',['as' => 'del', 'uses' => 'fac\QualController@destroy']);
	Route::post('addexp','fac\expcontroller@addexperience');
	Route::post('/fac/qupd/{id}',['as' => 'qupd', 'uses' => 'fac\QualController@update']);
	Route::post('/fac/eupd/{id}',['as' => 'eupd', 'uses' => 'fac\expcontroller@update']);
	Route::get('edel/{id}',['as' => 'del', 'uses' => 'fac\expController@destroy']);
	Route::post('fac/achadd', 'fac\achcontroller@ach_store');
	Route::post('/fac/aupd/{id}',['as' => 'aupd', 'uses' => 'fac\achcontroller@update']);
	Route::get('acdel/{id}',['as' => 'acdel', 'uses' => 'fac\achController@destroy']);
	Route::post('fac/rpdd', 'fac\reprojcontroller@rp_store');
	Route::post('/fac/rpupd/{id}',['as' => 'aupd', 'uses' => 'fac\reprojcontroller@update']);
	Route::get('rpdel/{id}',['as' => 'rpdel', 'uses' => 'fac\reprojcontroller@destroy']);
	Route::post('fac/rjadd', 'fac\rejourcontroller@rj_store');
	Route::get('rjdel/{id}',['as' => 'rjdel', 'uses' => 'fac\rejourcontroller@destroy']);
	Route::post('fac/cadd', 'fac\consulcontroller@c_store');
	Route::post('/fac/cupd/{id}',['as' => 'cupd', 'uses' => 'fac\consulcontroller@update']);
	Route::post('/document', 'fac\rejourcontroller@rj_store');
	Route::get('cdel/{id}',['as' => 'cdel', 'uses' => 'fac\consulcontroller@destroy']);
	Route::post('fac/padd', 'fac\patcontroller@p_store');
	Route::post('/fac/pupd/{id}',['as' => 'pupd', 'uses' => 'fac\patcontroller@update']);
	Route::get('pdel/{id}',['as' => 'pdel', 'uses' => 'fac\patcontroller@destroy']);
	Route::post('fac/pubadd', 'fac\pubcontroller@pu_store');
	Route::post('/fac/pubupd/{id}',['as' => 'pubupd', 'uses' => 'fac\pubcontroller@update']);
	Route::get('pubdel/{id}',['as' => 'pubdel', 'uses' => 'fac\pubcontroller@destroy']);
	Route::post('fac/theadd', 'fac\thecontroller@t_store');
	Route::post('/fac/tupd/{id}',['as' => 'tupd', 'uses' => 'fac\thecontroller@update']);
	Route::get('thedel/{id}',['as' => 'thedel', 'uses' => 'fac\thecontroller@destroy']);
	Route::post('fac/lecadd', 'fac\leccontroller@l_store');
	Route::post('/fac/lupd/{id}',['as' => 'lupd', 'uses' => 'fac\leccontroller@update']);
	Route::get('lecdel/{id}',['as' => 'lecdel', 'uses' => 'fac\leccontroller@destroy']);
	Route::post('fac/vadd', 'fac\viscontroller@v_store');
	Route::post('/fac/vupd/{id}',['as' => 'vupd', 'uses' => 'fac\viscontroller@update']);
	Route::get('vdel/{id}',['as' => 'vdel', 'uses' => 'fac\viscontroller@destroy']);

	Route::get('/getPDF','fac\PDFController@getPDF');
	
	Route::post('/fac/upd', 'fac\faculty@update');
	
	Route::post('/image_upload', 'fac\faculty@img');
});
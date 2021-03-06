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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('modals', 'ModalsController@index')->name('modals');

    Route::get('provesvue2', 'Provesvue2Controller@index')->name('provesvue2');

    Route::get('widgets', 'WidgetsController@index')->name('widgets');

    Route::get('widgetsDemo', 'WidgetsController@demo')->name('widgetsDemo');

});

<?php

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

// set deafult route
Route::get('/', [
	'uses' => 'BookController@index', 
	'as' => 'home'
]);

/**
 * indivisual routing
 */
//Route::get('books','BookController@index');
//Route::get('books/create','BookController@create');
//Route::get('books/{id}','BookController@show');
//Route::post('books','BookController@store');
//Route::get('books/{id}/edit','BookController@edit');
//Route::get('books/{id}/delete', 'BookController@delete');


/**
 * this resource routing is for all indivisual routing
 */
Route::resource('employees','BookController');
Route::get('employees/{id}/delete', 'BookController@delete');
Route::post('search', 'BookController@search');
Route::get('search', 'BookController@search');
/*Route::get('search', function()
{
    return View::make('books.search');
}); */

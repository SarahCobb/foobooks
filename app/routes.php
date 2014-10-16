<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/practice', function() {

    $fruit = Array('Apples', 'Oranges', 'Pears');

    echo Pre::render($fruit,'Fruit');

});

Route::get('/child1', function() {
	return View::make('child1');
});

Route::get('/child2', function() {
	return View::make('child2');
});
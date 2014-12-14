<?php

Route::group(['prefix' => 'hello', 'namespace' => 'Modules\Hello\Http\Controllers'], function()
{
	Route::get('/', 'HelloController@index');
});
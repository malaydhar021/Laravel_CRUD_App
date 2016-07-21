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
Route::get('/',['uses'=>'Controller@get_home']);
Route::post('/',['uses'=>'Controller@add_form']);
Route::get('infopage',['as'=>'infopage','uses'=>'NewController@show_information']);
Route::get('edit-task/{id}',['as'=>'edit-task','uses'=>'NewController@create_edit_task']);
Route::post('edit-task/{id}',['as'=>'edit-task','uses'=>'NewController@edit_task_post']);
Route::get('delete-task/{id}',['as'=>'delete-task','uses'=>'NewController@delete_task']);
Route::get('bid',['as'=>'bid','uses'=>'BidController@getIndex']);

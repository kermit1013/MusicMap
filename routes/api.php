<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/lists', 'PlayListsController@index')->name('lists.index');
Route::post('/lists/add', 'PlayListsController@add')->name('lists.add');
Route::put('/lists/edit', 'PlayListsController@edit')->name('lists.edit');
Route::delete('/lists/delete', 'PlayListsController@delete')->name('lists.delete');


Route::get('/news', 'NewsController@index');
Route::get('/news/recommend', 'NewsController@recommend');
Route::get('/news/{id}', 'NewsController@show');


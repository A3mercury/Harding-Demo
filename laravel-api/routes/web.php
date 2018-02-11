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

Route::get('/tasks')
    ->name('task.index')
    ->uses('TaskController@index');

Route::get('/task/{task}')
    ->name('task.show')
    ->uses('TaskController@show');

Route::post('/task/item/store')
    ->name('tasks.items.store')
    ->uses('TaskItemsController@store');

Route::post('/task/item/complete')
    ->name('task.items.complete')
    ->uses('TaskItemsController@complete');

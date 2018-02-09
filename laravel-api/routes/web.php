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

Route::post('/tasks/items/store')
    ->name('tasks.items.store')
    ->uses('TaskItemsController@store');

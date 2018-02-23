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
    print_r('This is our hmoe page');
});

# 1. Get all the tasks for a user (GET)
Route::get('/tasks', 'TasksController@tasks');

# 2. Save new tasks (POST)
Route::post('/tasks/create', 'TasksController@create');

# 3. Complete an existing task (POST)
Route::post('/tasks/complete', 'TasksController@complete');
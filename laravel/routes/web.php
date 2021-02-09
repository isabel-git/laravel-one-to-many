<?php

use Illuminate\Support\Facades\Route;

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

// EMPLOYEES
Route::get('/employee', 'MainController@employeeIndex') -> name('employee-index');
Route::get('/employee/{id}', 'MainController@employeeShow') -> name('employee-show');

// TASKS
Route::get('/task', 'MainController@taskIndex') -> name('task-index'); // quelle piu' specifiche    vanno sopra

Route::get('/task/create', 'MainController@taskCreate') -> name('task-create');
Route::post('/task/store', 'MainController@taskStore') -> name('task-store');

Route::get('/task/edit/{id}', 'MainController@taskEdit') -> name('task-edit');
Route::post('/task/update/{id}', 'MainController@update') -> name('task-update');

Route::get('/task/{id}', 'MainController@taskShow') -> name('task-show'); // quelle piu' generiche vanno messe infondo 


// TYPOLOGIES
Route::get('/typology', 'MainController@typologyIndex') -> name('typology-index');
Route::get('/typology/{id}', 'MainController@typologyShow') -> name('typology-show');

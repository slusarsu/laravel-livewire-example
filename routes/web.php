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

Route::get('/', function () {
    return view('welcome');
});

Route::view('examples/binding', 'examples.binding')->name('data-binding');
Route::view('examples/actions', 'examples.actions')->name('actions');
Route::view('examples/lifecycle-hooks', 'examples.lifecycle-hooks')->name('lifecycle-hooks');
Route::view('examples/events', 'examples.events')->name('events');
Route::view('examples/crud-posts', 'examples.crud-posts')->name('crud-posts');


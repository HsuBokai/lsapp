<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// http://localhost/users?id=10&name=David
Route::get('/users', function (Request $request) {
    return 'This is the user '.$request->query('name').' with an id of '.$request->query('id');
});

// http://localhost/users/id
Route::get('/users/{id}', function ($id) {
    return 'This is the user with an id of '.$id;
});

Route::get('/', function () {
    return view('welcome');
});

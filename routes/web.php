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

/*
** =================================================================
** Route usage:
**  To show all the users, user list
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
// Route::get('/users', [UsersController::class, 'showUsers']);
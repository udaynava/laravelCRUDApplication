<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CompaniesController;

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
Route::get('/users', [UsersController::class, 'showUsers']);

/*
** =================================================================
** Route usage:
**  To show add user page
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('/users/add', [UsersController::class, 'showAddUser']);

/*
** =================================================================
** Route usage:
**  For adding a new user
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('/users/add', [UsersController::class, 'addUser']);

/*
** =================================================================
** Route usage:
**  To edit a user details using user_id
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('/users/{uid}', [UsersController::class, 'showEditUser'])->where('uid', '[0-9]+');

/*
** =================================================================
** Route usage:
**  To edit a user details using user_id -POST
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('/users/{uid}', [UsersController::class, 'editUser'])->where('uid', '[0-9]+');

/*
** =================================================================
** Route usage:
**  To delete a user details using user_id -POST
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('users/{uid}/delete', [UsersController::class, 'deleteUser'])->where('uid', '[0-9]+');


// Company Pages

/*
** =================================================================
** Route usage:
**  To show all the companies, company list
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('/companies', [CompaniesController::class, 'showCompanies']);

/*
** =================================================================
** Route usage:
**  To show add user page
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('/companies/add', [CompaniesController::class, 'showAddCompany']);

/*
** =================================================================
** Route usage:
**  For adding a new user
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('/companies/add', [CompaniesController::class, 'addCompany']);

/*
** =================================================================
** Route usage:
**  To edit a user details using user_id
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('/companies/{compID}', [CompaniesController::class, 'showEditCompany'])->where('compID', '[0-9]+');

/*
** =================================================================
** Route usage:
**  To edit a user details using user_id -POST
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('/companies/{compID}', [CompaniesController::class, 'editCompany'])->where('compID', '[0-9]+');

/*
** =================================================================
** Route usage:
**  To delete a user details using user_id -POST
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('companies/{compID}/delete', [CompaniesController::class, 'deleteCompany'])->where('compID', '[0-9]+');


/*
** =================================================================
** Route usage:
**  show assign users to company form
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::get('companies/usersToComp/{compID}', [CompaniesController::class, 'showAddUsersToCompany'])->where('compID', '[0-9]+');

/*
** =================================================================
** Route usage:
**  To add assigned users to company -POST
** 
** History
** 2022-01-06 Uday - Add route
** =================================================================
*/
Route::post('companies/usersToComp/{compID}', [CompaniesController::class, 'addUserToCompany'])->where('compID', '[0-9]+');
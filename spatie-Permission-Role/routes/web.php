<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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

Auth::routes();


Route::group(['middleware'=> ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('roles/{role_id}/give-permissions', [RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{role_id}/give-permissions', [RoleController::class, 'postAddPermissionToRole']);
    Route::resource('users', UserController::class);
});
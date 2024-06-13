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
    return redirect('login');
});

Auth::routes();


Route::group(['middleware'=> ['auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
    Route::get('users/{user_id}/give-permissions', [UserController::class, 'addPermissionToUser']);
    Route::put('users/{user_id}/give-permissions', [UserController::class, 'postAddPermissionToUser']);
    Route::resource('users', UserController::class);
});
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

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user-role', App\Http\Controllers\UserRoleController::class);
    Route::resource('rule', App\Http\Controllers\PermissionRuleController::class);
    Route::resource('app-component', App\Http\Controllers\AppComponentController::class);
    Route::resource('rule', App\Http\Controllers\PermissionRuleController::class);

});
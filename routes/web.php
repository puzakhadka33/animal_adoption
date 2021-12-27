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


// route::view('landings','frontend/landing');
route::view('adoption','frontend/adoption');
route::view('inventory','frontend/inventory');
// route::view('landing','frontend/landing');
route::view('request','frontend/help');
route::view('profile','frontend/profile');
route::view('blogdetail','frontend/blogdetails');
route::view('orgprofile','frontend/organizationProfile');

route::get('/',[App\Http\Controllers\LandingController::class, 'index'])->name('index');
route::get('inventory',[App\Http\Controllers\AnimalListController::class, 'index'])->name('index');
route::get('orgprofile',[App\Http\Controllers\OrganizationViewController::class, 'index'])->name('index');



Auth::routes();
// category


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('user-role', App\Http\Controllers\UserRoleController::class);
    Route::resource('rule', App\Http\Controllers\PermissionRuleController::class);
    Route::resource('app-component', App\Http\Controllers\AppComponentController::class);
    Route::resource('rule', App\Http\Controllers\PermissionRuleController::class);

    Route::resource('category', App\Http\Controllers\CategoryController::class);
Route::resource('organization', App\Http\Controllers\OrganizationController::class);
Route::resource('animal', App\Http\Controllers\AnimalController::class);
Route::resource('adoption', App\Http\Controllers\AdoptionController::class);
Route::resource('admin', App\Http\Controllers\AdminController::class);
Route::resource('blog', App\Http\Controllers\BlogController::class);
Route::get('adopt/{animal}', [App\Http\Controllers\AdoptionController::class, 'adopt'])->name('adopt');

});
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
route::get('adoptapet/{id}',[App\Http\Controllers\LandingController::class, 'view'])->name('adopt.view');
route::get('inventory',[App\Http\Controllers\AnimalListController::class, 'index']);
route::get('orgprofile',[App\Http\Controllers\OrganizationViewController::class, 'index'])->name('orgprofile.index');
route::get('orglist',[App\Http\Controllers\OrganizationViewController::class, 'viewOrg'])->name('orgprofile.viewOrg');
route::get('orgprofile/{id}',[App\Http\Controllers\OrganizationViewController::class, 'show'])->name('orgprofile.show');
route::get('blogview/{id}',[App\Http\Controllers\BlogViewController::class, 'viewDetails'])->name('blogview.viewDetails');
route::post('contactus',[App\Http\Controllers\contact::class, 'store'])->name('contact.store');

// Route::resource('contact-us', App\Http\Controllers\ContactUsController::class);



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
    Route::resource('message', App\Http\Controllers\MessageController::class);
    // Route::resource('client', App\Http\Controllers\ClientController::class);
    
    
    route::get('inbox',[App\Http\Controllers\inboxController::class, 'viewMessage'])->name('inbox.viewMessage');
    Route::get('adopt/{animal}', [App\Http\Controllers\AdoptionController::class, 'adopt'])->name('adopt');
    route::get('adInbox',[App\Http\Controllers\contact::class, 'index'])->name('adInbox.index');
    route::get('adInbox/{id}',[App\Http\Controllers\contact::class, 'destroy'])->name('adInbox.destroy');
    route::get('profile',[App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
    route::get('editprofile/{id}',[App\Http\Controllers\HomeController::class, 'editProfile'])->name('edit.profile');
    route::post('updateprofile',[App\Http\Controllers\HomeController::class, 'updateProfile'])->name('update.profile');
    // route::post('client',[App\Http\Controllers\ClientController::class, 'update'])->name('update.profile');



});

Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('ashwinkhadka911@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});
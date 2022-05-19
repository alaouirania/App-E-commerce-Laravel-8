<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoriesController;


use App\Models\Post;





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

Artisan::call('storage:link', [] );

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('showpage', WelcomeController::class);
    Route::resource('page', PostController::class);

});



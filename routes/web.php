<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\History_tranfersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Type_ProductController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\CustomLoginController;


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

Route::get('gethistory-tranfers',[History_tranfersController::Class,'GetHistoryfunction']);
Route::get('getprofile',[ProfileController::Class,'Getprofile']);
Route::get('getrole',[RoleController::Class,'Getrole']);
Route::get('type_product',[Type_ProductController::Class,'Gettype_product']);
Route::resource('inventory',InventoryController::Class);

Route::get('dashboard', [CustomLoginController::class, 'dashboard']); 
Route::get('login', [CustomLoginController::class, 'index'])->name('login');
Route::post('custom-login', [CustomLoginController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomLoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomLoginController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomLoginController::class, 'signOut'])->name('signout');

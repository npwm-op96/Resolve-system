<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\History_tranfersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Type_ProductController;
use App\Http\Controllers\InventoryController;



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


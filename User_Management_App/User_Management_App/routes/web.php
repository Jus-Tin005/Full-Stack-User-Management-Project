<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RolesController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function(){
    return view('admin.index');
})->name('home');


/**
 *  Admin All Routes
 */
 Route::controller(AdminController::class)->group(function(){
    Route::get('admin/login','destroy')->name('admin.logout');
 });

 /**
 *  Role Routes
 */

 // Route::get('/baby',[RolesController::class, 'index']);
// Route::get('/baby',[RolesController::class, 'index']);

 /* Route::controller(RolesController::class)->group(function(){
    Route::get('/about','index');
 });
 */

  Route::controller(RolesController::class)->group(function(){
    Route::get('admin/roles','index');
    Route::get('admin/create','create');
    Route::get('admin/edit','edit');
    Route::get('admin/show','show');

 });












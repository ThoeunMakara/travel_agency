<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Admin\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//for switching language route
Route::get('/lang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/auth_test', function () {
    return view('layouts.auth_app');
});



Route::get("/example",function(){
    return "This is my first route";
});

Route::get("/user/{id}",function($id){
    return "this is user {$id}";
});

// Route::get('/front', function () {
//     return view('frontend');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');



Route::get('admin/services',[ServiceController::class,'index'])->name('admin.services');
Route::get('admin/services/create',[ServiceController::class,'create'])->name('admin.services.create');
Route::post('admin/services/store',[ServiceController::class,'store'])->name('admin.services.store');
Route::get('admin/services/edit/{id}',[ServiceController::class,'edit'])->name('admin.services.edit');
Route::get('admin/services/show/{id}',[ServiceController::class,'show'])->name('admin.services.show');
Route::post('admin/services/update/{id}',[ServiceController::class,'update'])->name('admin.services.update');
Route::post('admin/services/destroy/{id}',[ServiceController::class,'destroy'])->name('admin.services.destroy');



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


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


// authenticate routes
Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//if admin is logged in route
    Route::middleware(['auth', 'isAdmin'])->group(function (){
        Route::get('/dashboard','Admin\FrontendController@index');
        Route::get('/category','Admin\CategoryController@index');
        Route::get('addcat','Admin\CategoryController@add');
         
        //post for the category to be uploaded
        Route::post('insert-category','Admin\CategoryController@insert');

        //route where the page will be routed based on id       //class in category controller
        Route::get('editcat/{id}', [CategoryController::class, 'edit']);
        //update
        Route::put('update-category/{id}', [CategoryController::class, 'update']);
        //delete
        Route::get('deletecat/{id}', [CategoryController::class, 'destroy']);

     
    }); 
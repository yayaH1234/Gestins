<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;//use App\Http\Resources\UserResource;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\IncidentController;


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

Route::get('/login', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


Route::group(['middleware' => ['auth', 'admin']], function () {
    
    
  //  Route::get('/home',  [AdminController::class, 'index']);
    Route::get('/',  [AdminController::class, 'index']);
    
    Route::get('updateuser', function ()
    {
        return view('updateuser');
    })->name('updateuser');
    /*Route::get('userlist', function ()
    {
        return view('userlist');
    })->name('userlist');*/
    Route::resource('userlist',  AdminController::class);
    /*Route::get('showuser/{user}', function ($user)
    {
        return view('showuser',$user);
    })->name('showuser');*/
   
    Route::get('approveuser', function ()
    {
        return view('approveuser');
    })->name('approveuser');
    
    Route::resource('inslist', incidentController::class);

    Route::get('showins', [PostController::class, 'showincidentlist'])->name('showins');
    Route::get('updateins', function ()
    {
        return view('updateins');
    })->name('updateins');
    Route::get('addins', function ()
    {
        return view('addins');
    })->name('addins');

    
    Route::post('addinspost', [PostController::class, 'addinspostm']);
    
    
    
});


Route::group(['middleware' => ['commercial']], function () {

    Route::get('/homeC',  function ()
    {
        return view('addins');
    })->name('addins');
 /*
    Route::get('/home',  function ()
    {
        return view('addins');
    })->name('addins');*/

    Route::post('addinspostdata',[PostController::class, 'addinspostm']);




});

Route::group(['middleware' => ['isconsuser']], function () {

    Route::get('homeM', [PostController::class, 'showincidentlist'])->name('inslst');
    Route::get('/viewdet/{id}', [incidentController::class,'show'])->name('inslst');
});


/*
Route::get('/users', function () {
    return UserResource::collection(User::all());
});*/
<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Controller;
use App\Http\Controllers\GuidianController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {   
    Route::get('register', 'register')->name('register');
    Route::post('register','registerSave')->name('register.save');

    Route::get('/','login')->name('/');
    Route::post('login','loginAction')->name('login.action');
    

    Route::get("logout", 'logout')->middleware('auth')->name('logout');

    Route::get('/profile', [App\Http\Controllers\AuthController::class,'profile'])->name('profile'); 
    Route::get('/settings', [App\Http\Controllers\AuthController::class,'settings'])->name('settings'); 

    
});      


// Route::controller(GuidianController::class)->group(function () {
//     Route::get('','')->name('');

    
// });      


Route::middleware('admin')->group(function () {
    Route::get('admin/dashboard', [App\Http\Controllers\DashboardController::class,'dashboard'])->name('admin/dashboard');  
    Route::get('admin/sponsor', [App\Http\Controllers\AdminController::class,'sponsorlist'])->name('admin/sponsor'); 
    Route::get('admin/sponsor/create', [App\Http\Controllers\AdminController::class,'sponsorcreate'])->name('admin/sponsor/create');
    Route::post('sponsorsave', [App\Http\Controllers\AdminController::class,'sponsorSave'])->name('sponsor.register.save');
    Route::get('admin/guidian', [App\Http\Controllers\AdminController::class,'guidianlist'])->name('admin/guidian'); 
    Route::get('admin/guidian/create', [App\Http\Controllers\AdminController::class,'guidiancreate'])->name('admin/guidian/create'); 
    Route::get('admin/guidian/profile', [App\Http\Controllers\AdminController::class,'profile'])->name('admin/guidian/profile'); 
    Route::post('registersave', [App\Http\Controllers\AdminController::class,'registerSave'])->name('guidian.register.save');
    Route::get('admin/orphan', [App\Http\Controllers\AdminController::class,'orphanlist'])->name('admin/orphan'); 
    Route::get('admin/create/orphans', [App\Http\Controllers\AdminController::class,'createOrphans'])->name('admin/create/orphans'); 
    Route::post('orphansave', [App\Http\Controllers\AdminController::class,'orphansave'])->name('orphan.register.save');
});



Route::middleware('sponsor')->group(function () {
    Route::get('sponsor/dashboard', [App\Http\Controllers\DashboardController::class,'dashboard'])->name('sponsor/dashboard'); 
    Route::get('/sponsor', [App\Http\Controllers\SponsorController::class,'index'])->name('sponsor'); 
    Route::get('/sponsor/create', [App\Http\Controllers\SponsorController::class,'create'])->name('create');
});


Route::middleware('guidian')->group(function () {
    Route::get('guidian/dashboard', [App\Http\Controllers\DashboardController::class,'dashboard'])->name('guidian/dashboard'); 
    Route::get('/guidian', [App\Http\Controllers\GuidianController::class,'index'])->name('guidian'); 
    Route::get('guidian/create/', [App\Http\Controllers\GuidianController::class,'create'])->name('create-guardian');
    Route::get('guidian/profile', [App\Http\Controllers\GuidianController::class,'profile'])->name('guidian/profile'); 
    Route::post('saveregister', [App\Http\Controllers\GuidianController::class,'registerSave'])->name('save.guidian.register');
    Route::get('guidian/create/orphans', [App\Http\Controllers\GuidianController::class,'createOrphans'])->name('guidian/create/orphans'); 
    Route::post('saveOrphanRegister', [App\Http\Controllers\GuidianController::class,'saveOrphanRegister'])->name('save.Orphan.register');
    Route::get('guidian/success', [App\Http\Controllers\GuidianController::class,'success'])->name('guidian.success'); 
});




   // Route::get('sponsor/dashboard', function () {
    //     return view('dashboard');
    // })->name('sponsor/dashboard');  

    // Route::get('admin/dashboard', function () {
    //     return view('dashboard');
    // })->name('admin/dashboard');   



        // Route::get('guidian/dashboard', function () {
    //     return view('dashboard');
    // })->name('guidian/dashboard');   



    
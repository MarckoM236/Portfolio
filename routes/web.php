<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
//Route::view('/portfolio','portfolio')->name('portfolio');

/* Route::get('/portfolio',[PortfolioController::class,'index'])->name('projects.index');
Route::get('/portfolio/create',[PortfolioController::class,'create'])->name('projects.create');

Route::get('/portfolio/{project}/edit',[PortfolioController::class,'edit'])->name('projects.edit');
Route::patch('/portfolio/{project}',[PortfolioController::class,'update'])->name('projects.update');

Route::get('/portfolio/{project}',[PortfolioController::class,'show'])->name('projects.show');
Route::post('/portfolio',[PortfolioController::class,'store'])->name('projects.store');

Route::delete('/portfolio/{project}',[PortfolioController::class,'destroy'])-> name('projects.destroy');
 */

Route::view('/contact','contact')->name('contact');
Route::post('/contact',[MessagesController::class,'store'])->name('message');

Route::resource('portfolio',PortfolioController::class)
    ->parameters(['portfolio'=>'project'])
    ->names('projects');

Auth::routes(['register'=>false]);


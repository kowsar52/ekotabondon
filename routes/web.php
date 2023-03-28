<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/service-single', [HomeController::class, 'singleService'])->name('service-single');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/event', [HomeController::class, 'event'])->name('event');
Route::get('/event-single', [HomeController::class, 'singleEvent'])->name('event-single');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-left', [HomeController::class, 'blogLeft'])->name('blog-left');
Route::get('/blog-full-width', [HomeController::class, 'blogFull'])->name('blog-full-width');
Route::get('/blog-single', [HomeController::class, 'blogSingle'])->name('blog-single');
Route::get('/blog-single-fluid', [HomeController::class, 'blogSingleFluid'])->name('blog-single-fluid');
Route::get('/blog-single-left', [HomeController::class, 'blogSingleLeft'])->name('blog-single-left');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// All listings 
Route::get('/listings', [ListingController::class, 'index']);

// Create listing form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listing
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show one listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Create user
Route::get('/users/register', [UserController::class, 'register'])->middleware('guest');

// Store user
Route::post('/users/register', [UserController::class, 'store'])->middleware('guest');

// Logout user
Route::get('/users/logout', [UserController::class, 'logout'])->middleware('auth');

// Login user
Route::get('/users/login', [UserController::class, 'login'])->middleware('guest')->name('login');

// Authenticate user
Route::post('/users/login', [UserController::class, 'authenticate'])->middleware('guest');


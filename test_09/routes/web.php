<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
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

// Show all listings
Route::get('/listings', [ListingController::class, 'index']);

// Show Listing create page
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store listings
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// Manage listings
Route::get('listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single listings
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Show register page
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Register user
Route::post('/register', [UserController::class, 'store'])->middleware('guest');

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login page
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Authenticate user
Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');









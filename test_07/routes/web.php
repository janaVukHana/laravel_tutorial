<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Get all listings
Route::get('/listings', [ListingController::class, 'index']);

// Create new listing
Route::get('/listings/create', [ListingController::class, 'create']);

// Get single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Store new listing
Route::post('/listings', [ListingController::class, 'store']);

// Edit listing
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

// Register user
Route::get('/register', [UserController::class, 'create']);

// Create user
Route::post('/register', [UserController::class, 'store']);

// Show login form
Route::get('/login', [UserController::class, 'login']);

// Logout user
Route::post('/logout', [UserController::class, 'logout']);

// Authenticate user
Route::post('/authenticate', [UserController::class, 'authenticate']);



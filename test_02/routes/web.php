<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/listings', function() {
    return view('listings', [
        'title' => 'Listings page',
        'listings' => Listing::all()
    ]);
});

// Route Model Binding - automaticaly get error functionality
Route::get('/listing/{listing}', function(Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

Route::get('/search', function(Request $request) {
    return view('search', [
        'name' => $request->name,
        'age' => $request->age
    ]);
});

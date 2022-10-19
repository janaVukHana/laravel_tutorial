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
        'title' => 'MyListings',
        'desc' => 'Listings desc ...',
        'listings' => Listing::all()
    ]);
});

Route::get('/listing/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

Route::get('/posts/{id}', function($id) {
    return response('<h1>Post ' . $id . '</h1>');
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    // dd($request->query()['name']);
    // dd($request->server()['PATH_INFO']);
    return view('search');
});

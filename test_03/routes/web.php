<?php

use App\Http\Controllers\ListingControlller;
// use App\Models\Listing;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/listings', function() {
//     return view('listings', [
    //         'listings' => Listing::all()
    //     ]);
    // });
    
    // Route::get('/listing/{listing}', function(Listing $listing) {
        //     return view('listing', [
            //        'listing' => $listing 
            //     ]);
            // });
            
Route::get('/', [ListingControlller::class, 'index']);
Route::get('/listings', [ListingControlller::class, 'listings']);
Route::get('/listing/{listing}', [ListingControlller::class, 'listing']);
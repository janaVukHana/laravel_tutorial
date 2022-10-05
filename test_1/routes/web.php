<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Listing;

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

Route::get('/', function() {
    return view('listings', [
        'heading' => 'My listings',
        'body' => 'Here goes body content',
        'listings' => Listing::all(),
        // 'listings' => [
        //     [
        //         'id' => 1,
        //         'title' => 'Listing 1',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, magni.'
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Listing 2',
        //         'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, magni.'
        //     ]
        // ]
    ]);
});

Route::get('/listing/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

//ROUTING AND RESPONSES
// Route::get('/hello', function () {
//     return '<h1 style="color: red; text-align: center; margin-top: 100px;">Hello World!</h1>';
// });

// Route::get('/res', function() {
//     return response('<h1>Response page</h2>', '400')
//         ->header('Content-Type', 'text/plain')
//         ->header('foo', 'bar');
// });

// DIE DUMP HELPERS
// dd = dump and die, ddd = dump die and debug
// Route::get('/contact', function($name = 'ilija') {
    // dd($name);
//     // ddd($name); 
//     return '<h1>Contact page</h1>';
// });


// WILDCARD ENDPOINTS {id} AND ROUTE CONSTRAINTS ->where...
// Route::get('/posts/{id}', function($id) {
//     return response("<h1>Post number $id</h1>");
// })->where('id', '[0-9]+');

// Request & Query Params
// Route::get('/search', function(Request $request) {
//     dd($request);
    // return response($request->name . ' ' . $request->age);
// });

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// API ROUTES
// THIS IS HOW YOU WOULD MAKE AN API
// Route::get('/posts', function() {
//     return response()->json([
//         'posts' => [
//             'title' => 'POst 1',
//             'desc' => 'This is post 1 desc'
//             ]
//         ]);
// });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

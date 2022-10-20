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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('friends', function() {
    return response()->json([
        'friends' => [
            [
                'question_01' => 'Who is Chandlers wife?',
                'answer' => 'Monica'
            ], 
            [
                'question_02' => 'Who is Monica brother?',
                'answer' => 'Ros'
            ]
        ]     
    ]);
});

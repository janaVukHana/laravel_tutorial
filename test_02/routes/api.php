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
Route::get('/friends', function() {
    return response()->json([
        'friends' => [
            [
                'question_1' => 'Who love Rachel?',
                'answer' => 'Ros'
            ],
            [
                'question_2' => 'Who love Chandler?',
                'answer' => 'Monica'
            ]
        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

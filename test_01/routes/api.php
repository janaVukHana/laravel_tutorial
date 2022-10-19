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
        'friends_quiz' => [
            [
            'question_1' => 'What is Joey favorite food',
            'answer' => 'sendwich'
            ],
            [
            'question_2' => 'Who is Ros sister',
            'answer' => 'Monica'
            ]

        ]
    ]);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

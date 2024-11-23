<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// posts
Route::get('/posts', function() {
    return response()->json([
        'posts' => [
            'title' => 'Post 1',
            'author' => 'AJ Javadi',
        ],
        'users' => [
            'user_id' => '1',
            'username' => 'ajavadi'
        ]
]);
});
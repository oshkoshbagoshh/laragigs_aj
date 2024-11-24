<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

/**
 *
 *
 */

//  All Listings
Route::get('/', [ListingController::class, 'index']);

// Show Create form to create a gig
Route::get('/listings/create', [ListingController::class, 'create']);

// Store Listing date
Route::post('/listings', [ListingController::class, 'store']);

// Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);



//  Single Listings (should be at the end)
Route::get('/listings/{listing}',[ListingController::class, 'show']);


// Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);


// Create New User
Route::post('/users', [UserController::class, 'store']);


// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login',[UserController::class, 'login']);



// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
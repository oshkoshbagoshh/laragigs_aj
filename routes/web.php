<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/**
 *
 *
 */

//  All listings
Route::get('/', [ListingController::class, 'index']);

// Show create form to create a gig
Route::get('/listings/create', [ListingController::class, 'create']);

// Store listing date
Route::post('/listings', [ListingController::class, 'store']);




//  Single Listings (should be at the end)
Route::get('/listings/{listing}',[ListingController::class, 'show']);
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


//  Single Listings
Route::get('/listings/{listing}',[ListingController::class, 'show']);
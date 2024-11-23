<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

/**
 *
 *
 */

//  All listings
Route::get('/', function () {
    return view('listings', [
        'listings' => Listing::all()

    ]);
});


//  Single Listings
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);



});
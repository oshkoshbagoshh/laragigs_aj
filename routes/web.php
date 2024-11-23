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
        'heading' => 'Latest Listings',
        'listings' => Listing::all()

    ]);
});


//  Single Listings
Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);



});
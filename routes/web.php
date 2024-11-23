<?php


use Illuminate\Support\Facades\Route;

/**
 *
 *
 */

 Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Sint ut est recusandae incidunt est odio exercitationem quia sit. Reiciendis in temporibus est aut. Ad distinctio aperiam quod est iusto.'

            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Sint ut est recusandae incidunt est odio exercitationem quia sit. Reiciendis in temporibus est aut. Ad distinctio aperiam quod est iusto.'

            ]
        ]
    ]);
});

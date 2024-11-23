<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Sint ut est recusandae incidunt est odio exercitationem quia sit. Reiciendis in temporibus est aut. Ad distinctio aperiam quod est iusto.'

            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Sint ut est recusandae incidunt est odio exercitationem quia sit. Reiciendis in temporibus est aut. Ad distinctio aperiam quod est iusto. ' . 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro cumque a minima, iure officia ad blanditiis vero distinctio harum laborum dolore omnis itaque facere corporis repellendus exercitationem minus pariatur delectus?'

            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'habit molecular sale clay unusual coast interest sense everybody finish task immediately some is system glad yes pretty ask driver complex improve west breathing'

            ],
        ];

    }


    // get a single listing
    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
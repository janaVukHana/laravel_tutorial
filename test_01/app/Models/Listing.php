<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => '1',
                'name' => 'Listing 1',
                'desc' => 'Listing description from somewhere'
            ],
            [
                'id' => '2',
                'name' => 'Listing 2',
                'desc' => 'Listing description from somewhere'
            ],
            [
                'id' => '3',
                'name' => 'Listing 3',
                'desc' => 'Listing description from somewhere'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($id == $listing['id']) {
                return $listing;
            }
        }
    }
};
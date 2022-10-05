<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing 1',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, magni.'
            ],
            [
                'id' => 2,
                'title' => 'Listing 2',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, magni.'
            ],
            [
                'id' => 3,
                'title' => 'Listing 3',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam, magni.'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
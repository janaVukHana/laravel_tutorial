<?php

namespace App\Http\Controllers;

use App\Models\Listing;
// use Illuminate\Http\Request;

class ListingControlller extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function listings() {
        return view('listings', [
            'listings' => Listing::all()
        ]);
    }

    public function listing(Listing $listing) {
        return view('listing', [
            'listing' => $listing 
            ]);
    }
}

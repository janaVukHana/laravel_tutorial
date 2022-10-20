<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function listings() {
        // dd(request(['tag'])); // ovo nam daje arr 'tag' => here is what ever is in query: css, js, php, html...
        // dd(request('tag'))    // ovo je string. here is what ever is in tag
        return view('listings', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    public function listing(Listing $listing) {
        return view('listing', [
            'listing' => $listing
        ]);
    }
}

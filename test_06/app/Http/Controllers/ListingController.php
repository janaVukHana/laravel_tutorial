<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(3)
        ]);
    }

    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    // my error required typed requred(no 'i')
    public function store(Request $request) {
        $formFields = $request->validate([
           'title' => 'required',
           'tags' => 'required',
           'company' => ['required', Rule::unique('listings', 'company')],
           'email' => ['required', 'email'],
           'website' => 'required',
           'location' => 'required',
           'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/listings');
    }

}

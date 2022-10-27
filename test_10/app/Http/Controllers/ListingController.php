<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Auth\RequestGuard;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // All listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(4)
        ]);
    }

    // Show one listing
    public function show(Listing $listing) {
        return view('listings.show', ['listing' => $listing]);
    }

    // Create listings
    public function create() {
        return view('listings.create');
    }

    // Store listings
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'location' => 'required',
            'description' => ['required', 'min:10']
        ]);

        if($request->file('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->user()->id;

        Listing::create($formFields);

        return redirect('/listings')->with('message', 'Listing created');
    }

    // Edit listings
    public function edit(Listing $listing) {
        return view('listings.edit', ['listing' => $listing]);
    }

    // Update listing
    public function update(Request $request, Listing $listing) {

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'location' => 'required',
            'description' => ['required', 'min:10']
        ]);

        if($request->file('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated');
    }

    // Delete listing
    public function destroy(Listing $listing) {
        $listing->delete();

        return redirect('/listings/manage')->with('message', 'Listing deleted');
    }

    // Manage listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
        // NOTE: listings function gives me error but everything is working ???????
    }
}

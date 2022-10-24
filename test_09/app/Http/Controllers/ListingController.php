<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag']))->paginate(3)
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

    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'location' => 'required',
            'description' => ['required', 'min:10'],
        ]);

        if($request->file('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);


        return redirect('/listings')->with('message', 'Listing created');
    }

    public function edit(Listing $listing) {
        return view('.listings.edit', [
            'listing' => $listing
        ]);
    }

    public function update(Request $request, Listing $listing) {
        // Make sure logged in user is owner
        if(auth()->id() != $listing->user_id) {
            abort(403, 'Unauthorized Action!');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'location' => 'required',
            'description' => ['required', 'min:10'],
        ]);

        if($request->file('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        } 

        $listing->update($formFields);

        return back()->with('message', 'Listing updated');
    }

    public function destroy(Listing $listing) { 
        // Make sure logged in user is owner
        if(auth()->id() != $listing->user_id) {
            abort(403, 'Unauthorized Action!');
        }
        
        $listing->delete();

        return redirect('/listings')->with('message', 'Listing deleted');
    }

    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}

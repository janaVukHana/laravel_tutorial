@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._form')

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @if (count($listings) == 0)
            <p>Listings not found!</p>
        @else
            @foreach ($listings as $listing)
                <x-listing-card :listing=$listing />
            @endforeach
        @endif
    </div>

@endsection
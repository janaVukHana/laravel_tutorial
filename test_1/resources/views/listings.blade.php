@extends('layout')

@section('content')

{{-- <h1><?php echo $heading ?></h1>
<p><?php echo $body ?></p>

<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p><?php echo $listing['description']; ?></p>
<?php endforeach; ?> --}}

{{-- code with blade templates --}}
<h1>{{$heading}}</h1>
<p>{{$body}}</p>

{{-- @if(count($listings) == 0)
<h2>No listings found!</h2>
@endif --}}

@unless(count($listings) == 0)
@foreach($listings as $listing)
    <h2><a href="/listing/{{$listing['id']}}">{{$listing['title']}}</a></h2>
    <p>{{$listing['description']}}</p>
@endforeach

@else
<h2>No listings found!</h2>

@endunless

@endsection

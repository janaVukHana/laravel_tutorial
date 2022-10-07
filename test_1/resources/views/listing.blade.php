{{-- <h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p> --}}
@extends('layout')

@section('content')

<h1>Single listing page</h1>

<h2>{{$listing['title']}}</h2>
<p>{{$listing['description']}}</p>

@endsection
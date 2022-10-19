<h1>{{$title}}</h1>

<p>{{$desc}}</p>

<ul>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @else
        @foreach ($listings as $listing)
            <h2>{{$listing['name']}}</h2>
            <p>{{$listing['desc']}}</p>
            <a href='/listing/{{$listing['id']}}'>View listing</a>
        @endforeach
    @endif
</ul>
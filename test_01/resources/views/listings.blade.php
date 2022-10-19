<h1>{{$title}}</h1>

<p>{{$desc}}</p>

<ul>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @else
        @foreach ($listings as $listing)
            <h2>{{$listing['title']}}</h2>
            <p>{{$listing['description']}}</p>
            <a href='/listing/{{$listing['id']}}'>View listing</a>
        @endforeach
    @endif
</ul>
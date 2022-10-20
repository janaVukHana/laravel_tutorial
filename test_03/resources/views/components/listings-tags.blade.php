@props(['tags'])

<ul class="flex">
    @php
        $tags_arr = explode(', ', $tags);
        // dd($tags);
    @endphp
    @foreach ($tags_arr as $tag)
        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
            <a href="/listings?tag={{$tag}}">{{$tag}}</a>
        </li>
    @endforeach
</ul>
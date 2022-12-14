<x-layout>

@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if (count($listings) == 0)
        <p>No listings found!</p>
    @else
        @foreach($listings as $listing)
            <div class="bg-gray-50 border border-gray-200 rounded p-6">
                <div class="flex">
                    <img
                        class="hidden w-48 mr-6 md:block"
                        src="{{asset('images/no-image.png')}}"
                        alt=""
                    />
                    <div>
                        <h3 class="text-2xl">
                            <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                        </h3>
                        <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
                        
                        <x-listing-tags :tags="$listing->tags" />

                        <div class="text-lg mt-4">
                            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    @endif
</div>

<div class="mt-2 p-2">{{$listings->links()}}</div>

</x-layout>
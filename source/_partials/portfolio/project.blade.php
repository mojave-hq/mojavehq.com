<article class="relative flex flex-col justify-end px-8 pb-8 overflow-hidden bg-gray-900 isolate rounded-2xl pt-80 sm:pt-48 lg:pt-80">
    @if ($project->cover_image)
        <img src="{{ $project->cover_image }}" alt="{{ $project->title }} cover image" class="absolute inset-0 object-cover w-full h-full -z-10">
    @endif
    <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
    <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

    <div class="flex flex-wrap items-center overflow-hidden text-sm leading-6 text-gray-300 gap-y-1">
        @if ($project->categories)
            @foreach ($project->categories as $i => $category)
                <a
                    {{-- href="{{ '/categories/' . $category }}"
                    title="View projects in {{ $category }}" --}}
                    class="inline-block px-3 pt-px mr-4 text-xs font-semibold leading-loose tracking-wide text-gray-800 uppercase bg-gray-300 rounded hover:bg-blue-200"
                >{{ $category }}</a>
            @endforeach
        @endif
    </div>
    <h3 class="mt-3 text-lg font-semibold leading-6 text-white">
        <a
            {{-- href="{{ $project->getUrl() }}"
            title="Read more - {{ $project->title }}" --}}
            >
            {{ $project->title }}
        </a>
    </h3>
    @if ($project->coming_soon)
        <div>
            <span class="inline-flex items-center rounded-full bg-mojave-100 px-1.5 py-0.5 text-xs font-medium text-mojave-700">
                Coming Soon!
            </span>
        </div>
    @endif
</article>

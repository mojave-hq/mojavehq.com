<div class="px-6 mx-auto max-w-7xl lg:px-8">
    <div class="max-w-2xl mx-auto mt-8 sm:mt-10 lg:mt-12 lg:max-w-none">
        <div class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-4">
            @foreach ($pagination->items as $project)
                @include('_partials.portfolio.project')
            @endforeach
        </div>
    </div>
</div>
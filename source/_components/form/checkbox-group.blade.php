@props([
    'legend',
    'name',
    'options' => [],
])

<fieldset class="mt-4">
    <legend class="sr-only">{{ $legend }}</legend>
    <div class="space-y-5">
        @forelse ($options as $key => $value)
            <div class="relative flex items-start">
                <div class="flex items-center h-6">
                    <x-form.input id="{{ $name . '-' . $key }}" name="{{ $name }}[{{ $key }}]" type="checkbox" />
                </div>
                <div class="ml-3 text-sm leading-6">
                    <x-form.label for="{{ $name . '-' . $key }}" value="{{ $value }}" />
                </div>
            </div>
        @empty
            {{ $slot }}
        @endforelse
    </div>
</fieldset>
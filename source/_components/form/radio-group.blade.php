@props([
    'legend',
    'name',
    'options' => [],
])

<fieldset {{ $attributes->merge(['class' => 'mt-4']) }}>
    <legend class="sr-only">{{ $legend }}</legend>
    <div class="space-y-4">
        @forelse ($options as $key => $value)
            <div class="flex items-center">
                <x-form.input id="{{ $name . '-' . $key }}" name="{{ $name }}" type="radio" {{ $attributes->only(['required']) }} />
                <x-form.label for="{{ $name . '-' . $key }}" value="{{ $value }}" class="ml-3" />
            </div>
        @empty
            {{ $slot }}
        @endforelse
    </div>
</fieldset>
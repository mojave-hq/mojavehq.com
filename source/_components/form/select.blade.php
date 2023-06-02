@props([
    'options' => [],
])

<select {{ $attributes->merge(['class' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6']) }}>
    @forelse ($options as $key => $value)
        <option value="{{ $key }}">{{ $value }}</option>
    @empty
        {{ $slot }}
    @endforelse
</select>
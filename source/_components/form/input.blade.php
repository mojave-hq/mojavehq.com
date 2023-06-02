@props([
    'type',
])

<input type="{{ $type }}" {{ $attributes->merge(['class' => match($type) {
    'text', 'email', 'tel' => 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
    'radio' => 'w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-600',
    'checkbox' => 'w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-600',
    default => ''
}]) }}>

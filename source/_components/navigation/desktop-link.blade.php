<a
    {{ $attributes->merge(['class' => 'text-sm font-semibold leading-6 text-gray-900']) }}>
    {{ $value ?? $slot }}
</a>
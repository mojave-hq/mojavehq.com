<p {{ $attributes->merge(['class' => 'text-sm leading-6 text-gray-600']) }}>
    {{ $value ?? $slot }}
</p>

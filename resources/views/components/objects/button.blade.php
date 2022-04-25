@props([
    'type' => 'button',
    'class' => '',
    'label' => '',
    'variant' => 'primary',
    'kind' => 'solid',
    'radius' => 'medium',
    'size' => 'medium',
])


@php
    $interface_button = array(
        'kinds' => ['solid', 'outline', 'clear'],
        'variant' => ['primary', 'secondary', 'success', 'warning'],
        'radius' => ['none', 'small', 'medium', 'large', 'full'],
        // 'glow' => 
        'size' => ['small', 'medium', 'large'],
        'types' => ['button', 'submit']
    );
@endphp

{{-- {{ ddd($button['types']['button']) }} --}}

<button type="{{ $type }}" {{ $attributes->merge(['class' => "button {$variant} {$kind} {$radius} {$size}" ]) }}>
    {{ $slot ? $label : $slot}}
</button>
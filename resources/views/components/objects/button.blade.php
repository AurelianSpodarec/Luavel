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


{{-- check if value exists --}}
{{-- {{ ddd($interface_button['types'][$type]) }} --}}

<button type="{{ $type }}" {{ $attributes->merge(['class' => "button {$variant} {$kind} {$size} radius-{$radius}" ]) }}>
    {{ $slot ? $label : $slot}}
</button>
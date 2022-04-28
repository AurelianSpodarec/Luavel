{{-- @props([
    'label' => '',
    'items' => ''
])

<div class="js-dropdown-wrap">
    <button class="js-dropdown-button">{{ $label }}</button>
    <ul class="js-dropdown-items">
        @foreach ($items as $item)
            <li><a href="">{{ $item }}</a></li>
        @endforeach
    </ul>
</div>


<x-dropdown 
    label="Open Profile" 
    items={{ $list }} 
/> --}}

{{-- --------------------------- --}}
{{-- 
@props([
    'label' => '',
    'items' => ''
])

<div class="js-dropdown-wrap">
    <button class="js-dropdown-button">{{ $label }}</button>
    <ul class="js-dropdown-items">
        @foreach ($items as $item)
            {{ $item }}
        @endforeach
    </ul>
</div>
<x-select 
    label="Open Profile" 
    {{-- search=true --}}
    {{-- items={{ $list }}  --}}
{{-- /> --}} 
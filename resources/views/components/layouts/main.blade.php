<x-layouts.master>

    @include('partials._header')
    <main>
        
        {{ $slot }}

    </main>
    {{-- @include('partials._footer') --}}

</x-layouts.master>
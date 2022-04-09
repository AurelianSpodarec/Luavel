<x-layouts.main>



    User profile

    <h1>{{ $user->name }}</h1>
    {{ $user->id }}
    {{ $user->created_at->diffForHumans() }}

</x-layouts.main>
<x-layouts.main>
    
    
    <section class="relative" style="background-image: url(https://i.imgur.com/MgBxY5T.png);">
    <div class="px-8 py-12">

        <div class="absolute top-0 right-0 bottom-0 left-0 bg-black opacity-80"></div>

        <div class="flex items-center relative z-10">
            <img class="rounded-md" src="https://cdn.dribbble.com/users/1997192/avatars/normal/f4a8360e90be7c63e27096f075d5c5e1.png?1592063135" />

            <div class="ml-4">
                <h1 class="text-white text-3xl font-semibold">{{ $user->name }}</h1>
                <span class="text-white">{{ $user->created_at->diffForHumans() }}</span>
            </div>
        </div>

    </div>
    </section>


    <section class="px-8">
    <div class="border-b border-gray-200">
    <nav class="-mb-px flex space-x-8" aria-label="Tabs">
              
        <a href="#" class="border-indigo-500 text-indigo-600 whitespace-nowrap flex py-4 px-1 border-b-2 font-medium text-sm" aria-current="page">
            Scripts        
            <span class="bg-indigo-100 text-indigo-600 hidden ml-3 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block">{{ count($user->scripts) }}</span>
        </a>
        <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap flex py-4 px-1 border-b-2 font-medium text-sm">
            About
        </a>
              
    </nav>
    </div>
    </section>


    <section class="text-white px-8 mt-8 mb-12">
        {{-- {{ $user->scripts }} --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($user->scripts as $script)
            <x-cards.script-card :script="$script" />
        @endforeach
        </div>
    </section>
    

</x-layouts.main>
<x-layouts.main>
<div class="mx-auto px-8" style="background-color: #353543;"">


    <div class="flex justify-between items-center mb-8 pt-10">
        <div class="text-white">
            <h1 class="text-4xl font-bold">Lua Scripts</h1>
            <p class="text-lg">Search hthough a robust amount of scripts to add to your game or see how they are built!</p>
        </div>

        <div class="flex text-white">
            <div class="flex">
                <div>
                    <svg class="w-16 h-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" fill="currentColor"><path d="M516 673c0 4.4 3.4 8 7.5 8h185c4.1 0 7.5-3.6 7.5-8v-48c0-4.4-3.4-8-7.5-8h-185c-4.1 0-7.5 3.6-7.5 8v48zm-194.9 6.1l192-161c3.8-3.2 3.8-9.1 0-12.3l-192-160.9A7.95 7.95 0 0 0 308 351v62.7c0 2.4 1 4.6 2.9 6.1L420.7 512l-109.8 92.2a8.1 8.1 0 0 0-2.9 6.1V673c0 6.8 7.9 10.5 13.1 6.1zM880 112H144c-17.7 0-32 14.3-32 32v736c0 17.7 14.3 32 32 32h736c17.7 0 32-14.3 32-32V144c0-17.7-14.3-32-32-32zm-40 728H184V184h656v656z"></path></svg>
                </div>
                <div>
                    <span class="block text-2xl font-semibold">{{ $scripts->total() }}</span>
                    <span class="block text-xs font-bold text-gray-400 uppercase">Total Scripts</span>
                </div>
            </div>
            <button>
                Post a script
            </button>
        </div>
    </div>


    {{-- categories: gaming, network --}}
    {{-- script category --}}


    <div class="flex justify-between items-center mb-8">
        <nav class="" aria-label="Tabs">
            <a href="scripts" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;border-indigo-500 text-indigo-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                All
            </a>
            @foreach (App\Models\ScriptCategory::all() as $category)
            <a href="scripts/{{ $category->slug }}" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/4 py-4 px-1 text-center border-b-2 font-medium text-sm" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;border-indigo-500 text-indigo-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                {{ $category->name }}
            </a>
            @endforeach
        </nav>

        <div>
            Filter
        </div>
    </div>

    {{-- Minecraft Tags not MVP
    - Brewing
    - Items
    - Outfit

    GTA5 Tags
    - Pedestrians
    - Cars
    - Drifting
    - Weapons --}}


    <div class="grid grid-cols-3 gap-6">

        @foreach ($scripts as $script)
            <x-cards.script-card :script="$script" />
        @endforeach
        
    </div>

    {{ $scripts->links() }}


</div>
</x-layouts.main>
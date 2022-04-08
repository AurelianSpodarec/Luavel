@props([
    "title" => "",
    "excerpt" => "",
    "category" => ""
])

<article class="rounded-2xl" style="background-color: #4f525f;">
<div class="p-6">

    <header class="mb-4">
        <h3 class="text-white text-xl">{{ $title }}</h3> - <span>{{ $category }}</span>
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Drifting</span>
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Weapons</span>
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Pedestrians</span>
        <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Army</span>
    </header>

    <section class="mb-4">
        <p class="text-sm text-white">{{ $excerpt }}</p>
    </section>

    <footer class="flex justify-between items-center">
        <div>
            <a href="#"  class="flex items-center">
                <span class="sr-only">Roel Aufderehar</span>
                <img class="h-10 w-10 rounded-2xl" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                <span class="text-white font-semibold">Aurelian Spodarec</span>
            </a>
        </div>
        <div>
        <span>362 views</span>
        <span>4.7/5 stars</span>
        </div>
    </footer>

</div>
</article> 
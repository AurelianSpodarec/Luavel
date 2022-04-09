@props(['script'])

<article class="rounded-2xl" style="background-color: #1e1e2d; border: 2px solid #0c7793;">
<div class="p-8">

    <header class="mb-4">
    <div class="flex justify-between items-start">

        <a href="/scripts/{{ $script->slug }}" class="block">
            <span class="text-gray-300 text-sm">{{ $script->category->name }}<span> - 2take1</span></span>
            <h3 class="font-semibold text-white text-2xl">{{$script->title }}</h3>
        </a>
        <div class="flex"> 
            {{-- <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
            </svg> --}}
            {{-- <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" role="img" class="icon "><path d="m18.199 2.04c-2.606-.284-4.262.961-6.199 3.008-2.045-2.047-3.593-3.292-6.199-3.008-3.544.388-6.321 4.43-5.718 7.96.966 5.659 5.944 9 11.917 12 5.973-3 10.951-6.341 11.917-12 .603-3.53-2.174-7.572-5.718-7.96z"></path></svg> --}}
            {{-- <div class="flex items-center bg-pink-600 rounded-xl px-4 py-2">
                <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" role="img" class="icon "><path d="m18.199 2.04c-2.606-.284-4.262.961-6.199 3.008-2.045-2.047-3.593-3.292-6.199-3.008-3.544.388-6.321 4.43-5.718 7.96.966 5.659 5.944 9 11.917 12 5.973-3 10.951-6.341 11.917-12 .603-3.53-2.174-7.572-5.718-7.96z"></path></svg>
                <span class="text-white font-semibold block ml-1">Save</span>
            </div>
            <div class="flex items-center bg-pink-600 rounded-xl px-4 py-2 ml-2">
                <svg class="w-4 h-4 fill-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" role="img" class="icon "><path d="m18.199 2.04c-2.606-.284-4.262.961-6.199 3.008-2.045-2.047-3.593-3.292-6.199-3.008-3.544.388-6.321 4.43-5.718 7.96.966 5.659 5.944 9 11.917 12 5.973-3 10.951-6.341 11.917-12 .603-3.53-2.174-7.572-5.718-7.96z"></path></svg>
                <span class="text-white font-semibold block ml-1">Like</span>
            </div> --}}
        </div>
        
    </div>
    </header>

    <section class="mb-4">
        <p class="text-md text-white">{{ $script->excerpt }}</p>
    </section>

    <footer class="">
        {{-- <div class="mb-4">
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Drifting</span>
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Weapons</span>
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Pedestrians</span>
            <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-pink-500 rounded-full">Army</span>    
        </div> --}}

        <div class="flex justify-between items-center">
            <div>
                <a href="{{ "@" . "" . $script->user_id }}"  class="flex items-center">
                    <span class="sr-only">Roel Aufderehar</span>
                    <img class="h-10 w-10 rounded-2xl" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                    <span class="text-white font-semibold ml-2">{{ $script->author->name }}</span>
                </a>
            </div>
            {{-- <div class="flex"> 
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                    <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                </svg>
                <span class="text-white block">4.8</span>
            </div>
             --}}
        </div>

    </footer>

</div>
</article> 
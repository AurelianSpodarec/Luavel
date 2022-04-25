<x-layouts.main>

     
    <section id="join-discord">
    <div class="flex justify-between max-w-7xl mx-auto py-16">
        
        
        <div class="text-center mx-auto py-20">
            <h1 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                <span class="block xl:inline">The best Lua community</span>
                <!-- space -->
                <span class="block text-brand-500">for Gamers</span>
            </h1>
            <p class="mt-3 max-w-md mx-auto text-base text-white sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Explore Awesome Lua scripts for games made by others and check out the Lua Documentation
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    
                    <x-objects.button label="h~~~~~~~~~~~~#########ello" />

                    <a href="#" class="transition duration-500 ease-out shadow-[0_0_25px_0_#ffffff] hover:shadow-[0_0_35px_0_#ffffff] w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-brand-500 hover:bg-brand-500 md:py-4 md:text-lg md:px-10">
                    View Scripts
                </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                <a href="/docs" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                    Lua Docs
                </a>
                </div>
            </div>
        </div>

{{-- 
        Luahub.com  

        <h1>The best Lua Community for Gamers</h1>
        <p> --}}

        
        {{--  --}}
        
        {{-- Connect with Lua developers
        {{-- User Scripts | Documentation --}}
        {{-- View Scripts | Lua Docs  --}}

    </div>
    </section>


{{-- 
    <section>
    <div class="mx-auto py-8 px-8">

        <div class="text-white flex justify-between items-center">
            <h3 class="text-4xl font-bold">Hot Lua Scripts</h3>
            <span>View All</span>
        </div>

        <div class="grid grid-cols-3 gap-6">
            @foreach ($scripts as $script)
                <x-cards.script-card :script="$script" />
            @endforeach
        </div>

    </div>
    </section> --}}


{{-- 
    <section id="join-discord">
    <div class="flex justify-between max-w-7xl mx-auto py-8">
       
        Lua Documentation finally here!

        Proper online documentatoin for Lua

        [view docs]

        {{-- pic --}}
    {{-- </div>
    </section>
     --}}
{{-- 
    <section id="join-discord" class="bg-brand-500">
    <div class="flex justify-between max-w-7xl mx-auto py-8">


        <div class="flex">
            <svg viewBox="0 0 48 48" focusable="false" class="w-12 mr-6"><g id="surface1615260"><path d="M 39.246094 10.175781 C 36.445312 8.890625 33.4375 7.941406 30.292969 7.398438 C 30.234375 7.390625 30.179688 7.414062 30.148438 7.46875 C 29.761719 8.15625 29.332031 9.050781 29.03125 9.757812 C 25.652344 9.253906 22.285156 9.253906 18.972656 9.757812 C 18.675781 9.035156 18.230469 8.15625 17.839844 7.46875 C 17.8125 7.414062 17.753906 7.390625 17.695312 7.398438 C 14.554688 7.941406 11.546875 8.886719 8.742188 10.175781 C 8.71875 10.1875 8.695312 10.203125 8.683594 10.226562 C 2.976562 18.75 1.414062 27.0625 2.183594 35.273438 C 2.183594 35.3125 2.207031 35.351562 2.238281 35.375 C 6.003906 38.140625 9.648438 39.816406 13.226562 40.929688 C 13.28125 40.945312 13.34375 40.925781 13.378906 40.878906 C 14.226562 39.722656 14.980469 38.503906 15.628906 37.222656 C 15.664062 37.148438 15.628906 37.058594 15.550781 37.027344 C 14.355469 36.574219 13.214844 36.019531 12.121094 35.390625 C 12.03125 35.339844 12.027344 35.21875 12.105469 35.15625 C 12.335938 34.984375 12.566406 34.804688 12.789062 34.625 C 12.828125 34.589844 12.882812 34.585938 12.929688 34.605469 C 20.132812 37.894531 27.925781 37.894531 35.042969 34.605469 C 35.089844 34.582031 35.144531 34.589844 35.1875 34.621094 C 35.40625 34.804688 35.636719 34.984375 35.871094 35.15625 C 35.949219 35.21875 35.945312 35.339844 35.859375 35.390625 C 34.761719 36.03125 33.621094 36.574219 32.425781 37.027344 C 32.347656 37.054688 32.3125 37.144531 32.347656 37.222656 C 33.011719 38.503906 33.765625 39.71875 34.59375 40.875 C 34.628906 40.925781 34.691406 40.945312 34.75 40.929688 C 38.34375 39.816406 41.988281 38.136719 45.753906 35.375 C 45.785156 35.351562 45.808594 35.3125 45.808594 35.273438 C 46.726562 25.78125 44.273438 17.539062 39.304688 10.230469 C 39.292969 10.203125 39.273438 10.1875 39.246094 10.175781 Z M 16.703125 30.273438 C 14.535156 30.273438 12.75 28.28125 12.75 25.839844 C 12.75 23.394531 14.5 21.402344 16.703125 21.402344 C 18.921875 21.402344 20.691406 23.410156 20.65625 25.839844 C 20.65625 28.28125 18.90625 30.273438 16.703125 30.273438 Z M 31.324219 30.273438 C 29.15625 30.273438 27.371094 28.28125 27.371094 25.839844 C 27.371094 23.394531 29.121094 21.402344 31.324219 21.402344 C 33.542969 21.402344 35.3125 23.410156 35.277344 25.839844 C 35.277344 28.28125 33.542969 30.273438 31.324219 30.273438 Z M 31.324219 30.273438 " style="stroke: none; fill-rule: nonzero; fill: rgb(255, 255, 255); fill-opacity: 1;"></path></g></svg>
            <div class="text-white">
                <h3 class="text-md font-bold text-d-900 sm:text-lg">Connect with the community</h3>
                <p class="text-base text-d-500 opacity-70">Feel free to ask questions, report issues, and meet people</p>
            </div>
        </div>

        <div>
        <a href="https://discord.gg/Jp2HFx3KTH" target="_blank" class="w-full block font-bold items-center justify-center px-3 py-3 border border-transparent text-base font-medium rounded-md text-black bg-white hover:bg-white md:py-4 md:text-md md:px-10">
            Join the #Luavel Discord!
        </a>
        </div>

        
    </div>
    </section> --}}


{{-- 
    <div class=>

        Explore Luavel

        packages etc..

    </div>


    <div>

        Game Dev

        Minecraft
        GTA5
        Roblox

    </div>

    <div>
        Resoruces
        Learn/tutorials
    </div>

    <div>

        Connect with Community - Discord
    </div> --}}


</x-layouts.main>
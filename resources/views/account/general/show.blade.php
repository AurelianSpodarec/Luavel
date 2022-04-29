<x-layouts.main>
    
    <section class="flex max-w-6xl text-white mx-auto pt-12">
        <h1 class="text-white text-5xl font-semibold">General</h1>
    </section>

    <div class="flex max-w-6xl text-white mx-auto py-12 md:pb-20">
        <aside class="w-1/4 hidden md:block">
            <div>
                <a href="" class="block mb-4 pl-1 border-l-2 text-brand-500 border-brand-500">General</a>
                <a href="" class="block mb-4 pl-1">Edit Profile</a>
                <a href="" class="block mb-4 pl-1">Password</a>
                <hr>
                <a href="" class="text-red-500 block mb-4 pl-1">Delete Account</a>
            </div>
        </aside>
        
        <section class="bg-[#131313] md:border-solid md:border-1 md:rounded-lg md:shadow w-full md:p-6">
           

            @if(Auth::check())

            <div class="mb-6">
                <h3 class="text-white font-semibold text-lg">Username</h3>
                {{ Auth::user()->username }}
            </div>
                
            <div>
                <h3 class="text-white font-semibold text-lg">Email Address</h3>
                {{ Auth::user()->email }}
            </div>

            @endif
        </section>
    </div>
    

</x-layouts.main>
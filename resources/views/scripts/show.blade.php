<x-layouts.main>
<div class="mx-auto max-w-5xl bg-[#101010] border-3 border-[#212121] px-8 rounded-xl  py-12 my-20">
    {{-- border: 2px solid #212121; --}}
    {{-- background: #101010; --}}
    {{-- look at steam for isnpiration --}}
    {{-- copy product hunt literally --}}
    {{-- collections of scripts - with most rating? --}}

    <article class="">
        <header class="flex justify-between items-start mb-8">

            
            <div class="mb-6">
                {{-- Category, menu name --}}
                <span class="text-white">Minecraft</span>
                <h1 class="text-white text-5xl font-bold">{{ $script->title }}</h1>
                <p class="text-white">{{ $script->excerpt }}<p>
                {{-- tags --}}
            </div>  

            <div class="max-w-[360px] flex flex-wrap items-start justify-end">
                <a href="#" style="margin: 6px 0 6px 12px;" class="border-2 border-[#3b3633] text-gray-300 px-3 py-2 font-medium text-sm rounded-md" aria-current="page">
                    Weapons
                </a>
                <a href="#" style="margin: 6px 0 6px 12px;" class="border-2 border-[#3b3633] text-gray-300 px-3 py-2 font-medium text-sm rounded-md" aria-current="page">
                    Drifting
                </a>
                <a href="#" style="margin: 6px 0 6px 12px;" class="border-2 border-[#3b3633] text-gray-300 px-3 py-2 font-medium text-sm rounded-md" aria-current="page">
                    Army
                </a>
                <a href="#" style="margin: 6px 0 6px 12px;" class="border-2 border-[#3b3633] text-gray-300 px-3 py-2 font-medium text-sm rounded-md" aria-current="page">
                    Pedestrians
                </a>
                <a href="#" style="margin: 6px 0 6px 12px;" class="border-2 border-[#3b3633] text-gray-300 px-3 py-2 font-medium text-sm rounded-md" aria-current="page">
                    Car
                </a>
            </div>

          
      
        </header>

        <section class="grid grid-cols-3 gap-6">
          
                  {{-- picture(optional) --}}

            <div class="col-span-2">
              
                <div class="bg-[#1b1b1b] p-4">
                <img class="rounded-lg w-full" src="https://ph-files.imgix.net/95520b38-78fb-43bf-9a4c-b461b67dca88.jpeg?auto=format&auto=compress&codec=mozjpeg&cs=strip&w=635&h=380&fit=max&bg=0fff&dpr=1" />       
                </div>
                <div class="text-gray-300">
                {{ $script->description }}
                Kek's menu is a 2take1 lua script.
The aim is to deliver a script that is stable and fills the gaps in the vanilla feature set of 2take1.
Whether you like to mess with people, help people out or just try to be low-key, this script offers something useful.
Kek's menu is available in 10 languages.

The feature list will be structured like the script is.
This means you can figure out where features are located based on the structure of this document.
Example: General settings > Settings > Save to default
If there's anything confusing or vague in the feature list, feel free to suggest improvements.
I'm open to people translating this to another language. You have to speak the language fluently.

The feature list isn't finished yet.
                </div>
                
            </div>
                {{-- feature list --}}
    
                {{-- share --}}
                    {{-- user comments --}}

            <aside class="col-span-1">

                <div class="flex text-white mb-4">
                    <button class="min-w-[100px] inline-block items-center justify-center px-5 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white border border-brand-500 hover:bg-brand-600">
                        Get it
                    </button>
                    <button class="w-full ml-3 inline-block items-center justify-center px-5 py-3 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-brand-500 hover:bg-brand-600">
                        Upvote 64
                    </button>
                </div>

                <div class="bg-[#1b1b1b] p-4">
                    <span class="text-white text-sm mb-4 block">Maker</span>

                    <a href="{{ "@" . "" . $script->user_id }}" class="flex items-center">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        <div class="ml-2">
                            <span class="block text-sm text-white font-bold">{{ $script->author->name }}</span>
                            <span class="block text-sm text-white">I love building things that</span>
                        </div>
                    </a>

                </div>

            </aside>

        </section>
    </article>


</div>
</x-layouts.main>
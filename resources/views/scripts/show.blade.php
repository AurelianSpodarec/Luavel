<x-layouts.main>
<div class="mx-auto max-w-5xl bg-[#1e1e1e] p-8 my-20">

    {{-- look at steam for isnpiration --}}
    {{-- copy product hunt literally --}}
    {{-- collections of scripts - with most rating? --}}

    <article class="">
        <header class="flex justify-between">

            
            <div class="mb-6">
                {{-- Category, menu name --}}
                <h1 class="text-white text-5xl font-bold">{{ $script->title }}</h1>
                <p class="text-white">{{ $script->excerpt }}<p>
                {{-- tags --}}
            </div>

          
      
        </header>

        <section class="grid grid-cols-3 gap-6">
          
                  {{-- picture(optional) --}}

            <div class="col-span-2">
                
                <div class="bg-[#1b1b1b] p-4">
                <img class="rounded-lg w-full" src="https://ph-files.imgix.net/95520b38-78fb-43bf-9a4c-b461b67dca88.jpeg?auto=format&auto=compress&codec=mozjpeg&cs=strip&w=635&h=380&fit=max&bg=0fff&dpr=1" />       
                </div>
                {{ $script->description }}
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
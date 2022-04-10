<x-layouts.main>
<div class="mx-auto max-w-5xl bg-[#232323] p-8 my-20">

    {{-- look at steam for isnpiration --}}
    {{-- copy product hunt literally --}}
    {{-- collections of scripts - with most rating? --}}

    <main class="grid grid-cols-3 gap-6">
        <section class="col-span-2">
            <div class="mb-6">
                {{-- Category, menu name --}}
                <h1 class="text-white text-5xl font-bold">{{ $script->title }}</h1>
                <p class="text-white">{{ $script->excerpt }}<p>
                {{-- tags --}}
            </div>
            {{-- picture(optional) --}}

            <div>
                <div class="bg-red-500 p-4">
                <img class="rounded-lg w-full" src="https://ph-files.imgix.net/95520b38-78fb-43bf-9a4c-b461b67dca88.jpeg?auto=format&auto=compress&codec=mozjpeg&cs=strip&w=635&h=380&fit=max&bg=0fff&dpr=1" />       
                </div>
                {{ $script->description }}
            </div>
            {{-- feature list --}}

            {{-- share --}}
                {{-- user comments --}}
        </section>

        <aside class="col-span-1">
            <div class="text-white">
            Get it | Upvote
            </div>
            <div>
                Authro
            </div>

        </aside>
    </main>


</div>
</x-layouts.main>
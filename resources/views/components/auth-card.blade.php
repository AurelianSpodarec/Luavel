{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
<div class="relative flex justify-between items-center pt-6 sm:pt-0 py-40 px-8">

    <div class="z-10 absolute top-0 right-0 bottom-0 left-0 bg-black opacity-70"></div>
    

    <div class=" z-20 text-white">
        <h3 class="text-6xl font-bold">Experience mind shaking emotions. There's a lot more fun than you think!</h3>
        {{--                           Experience emotions out of this world! There's a lot more fun than you think! --}}
        <div>
            <span>Share scripts</span>
            <span>Lau Documentation</span>
            <span>Discord</span>
        </div>
    </div>
    <div class="w-full z-20 sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

        {{ $slot }}
    </div>
</div>

<x-layouts.main>
<div class="mx-auto max-w-5xl bg-[#101010] border-3 border-[#212121] px-8 rounded-xl  py-12 my-20">
<form method="POST" action="{{ route('scripts.store') }}" enctype="multipart/form-data">
    @csrf

    <div>

        <header>
            <h3 class="text-4xl font-semibold text-white">What script are you working on?</h3>
            <p class="text-sm text-gray-500">Share information about your script that will appear publicity.</p>
        </header>

        <section>

            <div class="col-span-6 sm:col-span-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" autocomplete="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>

            <div class="sm:col-span-3">
                <label for="script-category" class="block text-sm font-medium text-gray-300">
                Game Category
                </label>
                <div class="mt-1">
                <select id="script-category" name="script-category" autocomplete="script-category-name" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    @foreach (App\Models\ScriptCategory::all() as $category)
                    <option>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                </div>
            </div>


            <div class="sm:col-span-4">
                <label for="GitHub URL" class="block text-sm font-medium text-gray-300">
                GitHub URL
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                    github.com/
                </span>
                <input type="text" name="GitHub URL" id="GitHub URL" autocomplete="GitHub URL" class="flex-1 focus:ring-brand-500 focus:border-brand-500 block w-full min-w-0 rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
            </div>


            <div class="sm:col-span-6">
                <label for="about" class="block text-sm font-medium text-gray-300">
                    Description
                </label>
                <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                </div>
            </div>


            <div class="sm:col-span-6">
                <label for="about" class="block text-sm font-medium text-gray-300">
                    Excerpt Script
                </label>
                <div class="mt-1">
                <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-brand-500 focus:border-brand-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                </div>
            </div>


            <div class="sm:col-span-6">
                <label for="cover-photo" class="block text-sm font-medium text-gray-300">
                    Thumbnail
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">

                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-brand-500 hover:text-brand-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-brand-500">
                        <span>Upload a file</span>
                        <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1">or drag and drop</p>
                    </div>
                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                    
                </div>
                </div>
            </div>

        </section>

 
    </div>

    <footer class="pt-5 flex justify-end">
        <button href="{{ route('scripts.store') }}" type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-brand-500 hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500">
            Post Script
        </button>
    </footer>

</form>
</div>
</x-layouts.main>
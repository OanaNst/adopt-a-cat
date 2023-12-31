<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Post a cat</h2>
            <p class="mb-4">Post a cat & help find its forever home</p>
        </header>

        <form 
            action="/listings"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <div class="mb-6">
                <label 
                    for="title" 
                    class="inline-block text-lg mb-2">Cat Name
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    placeholder="Example: Chonky"
                    value="{{old('title')}}"
                />

                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2">Cat Location
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="location"
                    placeholder="Example: Wangen, Zurich, Bern, etc."
                    value="{{old('location')}}"
                />

                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label 
                    for="email" 
                    class="inline-block text-lg mb-2">Human Contact Email
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    placeholder="Example: cat-enthusiast@gmail.com"
                    value="{{old('email')}}"
                />

                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label 
                    for="tags" 
                    class="inline-block text-lg mb-2">Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: fat, lovebug, sleepy, etc"
                    value="{{old('tags')}}"
                />

                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label 
                    for="logo" 
                    class="inline-block text-lg mb-2">Cat Photo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2">Cat Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10">

                {{old('description')}}
                </textarea>

                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror

            </div>

            <div class="mb-6">
                <button
                    type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">Post Cat
                </button>
                <a href="/" class="text-black ml-4">Back</a>
            </div>
        </form>
    </x-card>
</x-layout>
<x-layout>
    <x-container>
        <x-page-header>
            <h1>Edit Collection</h1>
        </x-page-header>
    </x-container>
    <x-container>
        <div class="bg-white rounded-lg flex flex-col p-12 max-w-2xl mx-auto my-10 shadow">
            <h1 class="text-3xl font-bold mb-6">Edit Collection</h1>
            <form method="POST" action="/collections/store" class="flex flex-col gap-8">
                @csrf
                @method('PUT')
                <div class="flex flex-col gap-2">
                    <label for="name" class="text-gray-600 text-md">
                        Name<span class="text-red-600">*</span>
                    </label>
                    <input id="name" defaultValue="{{$collection->name}}" value="{{ $collection->name }}" name="name" type="text" autofocus
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('name')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex flex-col gap-2">
                    <label for="description" class="text-gray-600 text-md">
                        Description<span class="text-red-600">*</span>
                    </label>
                    <textarea defaultValue="{{$collection->description}}" id="description" value="{{ $collection->description }}" name="description" type="text"
                        autofocus class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow"></textarea>
                    @error('description')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-8 flex items-center justify-end gap-8">
                    <a class="text-blue-600" href="/collections">Cancel</a>
                    <button type="submit" class="py-2 px-5 bg-blue-600 text-white rounded shadow">Update</button>
                </div>
            </form>
    </x-container>
</x-layout>


<x-layout>
    <x-container class="mb-8">
        <x-page-header>
            Collections
        </x-page-header>
    </x-container>
    <x-container class="h-full">
        <div class="flex bg-white rounded shadow h-full">
            <ul class="border-r border-gray-200 py-3">
                @foreach ($collections as $collection)
                    <li>
                        <a href="/collections/{{$collection->id}}" class="whitespace-nowrap pl-6 pr-12 py-4 flex items-center text-gray-700 text-md font-medium hover:bg-gray-50 cursor-pointer" href="/collections/{{$collection->id}}">
                            <h3>{{ $collection->name }}</h3>
                        </a>
                    </li>
                @endforeach
                <li>
                    <button class="whitespace-nowrap text-blue-700 font-medium pl-6 pr-12 py-4 flex items-center justify-center gap-1 rounded">New collection</button>
                </li>
            </ul>
            <div class="w-full">
                <div class="flex w-full items-center px-8 py-6 border-b border-gray-100 justify-between">
                    <h2 class="text-lg font-bold">
                        {{ $active_collection->name }} 
                    </h2> 
                    <div>
                        <button class="text-gray-700 hover:text-gray-600">Edit</button>
                    </div>
                </div>
                <div class="px-8 pt-4 pb-8">

                </div>
            </div>
        </div>
    </x-container>
</x-layout>

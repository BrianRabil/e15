<x-layout>
    <x-container class="container max-w-6 mx-auto pb-12">
        <x-page-header>Search</x-page-header>
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input placeholder="Search..." class="py-2 px-3 bg-white border border-gray-200 shadow-sm rounded" aria-labelledby="search" />
                <button class="py-2 px-4 font-medium bg-blue-700 text-white -ml-1 rounded shadow-sm" id="search">Search</button>
            </div>
            <span class="text-sm text-gray-600">Showing {{$results_count}} results</span>
        </div>
    </x-container>
    <x-container>
        <ul class="container max-w-6 mx-auto flex justify-start flex-wrap gap-4">
            @foreach ($results_list as $result)
                <li>
                    <a href="pokemon/{{ $result->id }}"
                        class="bg-white flex flex-col rounded-lg drop-shadow text-center p-4 hover:shadow-lg transition ease-out duration-150">
                        <img class="object-contain" src={{ $result->sprite }} />
                        <h3 class="font-medium text-gray-800">{{ $result->name }}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
    </x-container>
</x-layout>

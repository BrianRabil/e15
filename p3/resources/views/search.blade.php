<x-layout>
    <section>
        <div class="container max-w-6 mx-auto pb-6">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Search</h1>
            <div class="flex items-center">
                <input aria-labelledby="search" />
                <button id="search">Search</button>
            </div>
        </div>
        <ul class="container max-w-6 mx-auto flex justify-start flex-wrap gap-2">
            @foreach ($results_list as $result)
                <li>
                    <a href="pokemon/{{$result->id}}" class="bg-white flex flex-col rounded-lg drop-shadow text-center p-4 hover:shadow-lg transition">
                        <img class="object-contain" src={{ $result->sprite }} />
                        <h3 class="font-medium text-gray-800">{{ $result->name }}</h3>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</x-layout>

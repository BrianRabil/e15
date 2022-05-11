<x-layout>
    <x-container>
        <section class="flex justify-between items-center border-b border-gray-200 py-8">
            <div class="flex items-center gap-4">
                <img src={{$sprite}}  />
                <h1 class="text-5xl text-gray-800 font-bold italic">{{ $name }}</h1>
            </div>
            <button class="bg-white px-4 rounded shadow-sm cursor-pointer py-2 flex items-center gap-1 font-medium">Favorite</button>
        </section>
    </x-container>
    <x-container>
        <section>
            <h2 class="text-2xl py-4">Moves</h2>
            <ul class="flex flex-col gap-4">
                @foreach ($moves as $move)
                    <li class="px-6 py-4 bg-white flex items-center justify-start shadow-sm rounded">
                        {{ ucwords($move->move->name) }}
                    </li>
                @endforeach
            </ul>
        </section>
    </x-container>
</x-layout>
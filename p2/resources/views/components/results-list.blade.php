<div>
    <x-container>
        <ul>
            @if (count($results) > 0)
                @foreach ($results as $result)
                    <p>This is user {{ $result->id }}</p>
                @endforeach
            @endif
        </ul>
    </x-container>
</div>

<div class="w-full py-6 border-b border-gray-300">
    <x-container>
        <form class="flex items-center gap-3" action={{ route('search') }} method="POST">
            <x-form.input name="search" id="poke-search" placeholder="Search Pokemon..." />
            <x-form.button type="submit">
                <img alt="pokeball" class="h-8 object-fit" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8c1278f2-6f53-4727-b803-1a4c297c191f/dapbbed-30642074-7c2d-43c2-ad05-be7bc0f0089a.png/v1/fill/w_1600,h_1600,strp/original_pokeball_vector_by_greenmachine987_dapbbed-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYwMCIsInBhdGgiOiJcL2ZcLzhjMTI3OGYyLTZmNTMtNDcyNy1iODAzLTFhNGMyOTdjMTkxZlwvZGFwYmJlZC0zMDY0MjA3NC03YzJkLTQzYzItYWQwNS1iZTdiYzBmMDA4OWEucG5nIiwid2lkdGgiOiI8PTE2MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.cisWXCiz7JCdLjr-HzGGsjoQUsGf6StVLVGStptev20" />
                Search
            </x-form.button>
        </form>
    </x-container>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
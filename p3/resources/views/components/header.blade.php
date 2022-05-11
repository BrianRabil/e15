 <header class="bg-white h-16 shadow">
     <x-container class="h-full flex items-center justify-between">
        <div class="flex items-center gap-2">
            <img class="h-8 object-contain" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/8c1278f2-6f53-4727-b803-1a4c297c191f/dapbbed-30642074-7c2d-43c2-ad05-be7bc0f0089a.png/v1/fill/w_1600,h_1600,strp/original_pokeball_vector_by_greenmachine987_dapbbed-fullview.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTYwMCIsInBhdGgiOiJcL2ZcLzhjMTI3OGYyLTZmNTMtNDcyNy1iODAzLTFhNGMyOTdjMTkxZlwvZGFwYmJlZC0zMDY0MjA3NC03YzJkLTQzYzItYWQwNS1iZTdiYzBmMDA4OWEucG5nIiwid2lkdGgiOiI8PTE2MDAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.cisWXCiz7JCdLjr-HzGGsjoQUsGf6StVLVGStptev20" />
            <a href="/" class="text-lg font-bold text-gray-900">PokeApp!</a>
        </div>
         <nav>
             <ul class="flex align-center gap-10 text-sm font-medium text-gray-800 hover:text-gray-600">
                 <li>
                     <a href="/search">Search</a>
                 </li>

                 <li>
                     <a href="/collections">Collections</a>
                 </li>

                 <li class="h-6 w-1 border-l border-gray-100"></li>

                 @auth
                     <li>
                         <a href="/profile">{{ auth()->user()->name }}</a>
                     </li>
                     <li>
                        <form method="POST" action="/logout">
                            <button type="submit" class="hover:text-red-400" href="/logout">Logout</button>
                        </form>
                     </li>
                 @else
                     <li>
                         <a href="/register">Register</a>
                     </li>

                     <li>
                         <a href="/login">Login</a>
                     </li>
                 @endauth
             </ul>
         </nav>
     </x-container>
 </header>

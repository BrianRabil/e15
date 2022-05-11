 <header class="bg-white h-16">
     <x-container class="h-full flex items-center justify-between">
         <a href="/" class="text-lg font-bold">PokeApp!</a>
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

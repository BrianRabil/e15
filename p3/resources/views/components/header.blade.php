 <header class="bg-white h-16">
     <div class="container h-full max-w-lrg mx-auto flex items-center justify-between">
         <h1 class="text-lg font-bold">PokeApp!</h1>
         <nav>
             <ul class="flex align-center gap-10 text-sm font-medium text-gray-800">
                 <li>
                     <a href="/search">Search</a>
                 </li>

                 <li>
                     <a href="/boxes">Boxes</a>
                 </li>

                 <li class="h-6 w-1 border-l border-gray-100"></li>

                 @auth
                     <li>
                         <a href="/profile">{{ auth()->user()->name }}</a>
                     </li>
                     <li>
                        <form method="POST" action="/logout">
                            <button type="submit" class="text-red-600 hover:text-red-400" href="/logout">Logout</button>
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
     </div>
 </header>

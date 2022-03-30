<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PokePHP\PokeApi;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{

    public $poke_api;
    public $results;

    public function __construct()
    {
        $this->results = [];
        $this->poke_api = new PokeApi;
        $this->poke_api->resourceList('ENDPOINT', 'LIMIT', 'OFFSET');
    }

    /**
     * GET /
     * Display the application welcome page with a search feature
     */
    public function index()
    {
        # If there is data stored in the session as the results of doing a search
        # that data will be extracted from the session and passed to the view
        # to display the results
        return view('welcome');
    }

    public function store(Request $request)
    {
        $request->validate([
            'search' => 'required',
        ]);
    }

    public function search(Request $request)
    {
        # Get the form nput values (default to null if no values exist)
        $searchTerms = $request->input('searchTerms', null);
        $pokemonData = $this->fetchPokemonList(10);
        $pokemons = json_decode($pokemonData, true);
        $this->results = $pokemons;
        # Load our json book data and convert it to an array
        // $bookData = file_get_contents(database_path('books.json'));
        // $books = json_decode($bookData, true);

        // # Do search
        // $searchResults = [];
        // foreach ($books as $slug => $book) {
        //     if (strtolower($book[$searchType]) == strtolower($searchTerms)) {
        //         $searchResults[$slug] = $book;
        //     }
        // }

        // # Redirect back to the form with data/results stored in the session
        // # Ref: https://laravel.com/docs/responses#redirecting-with-flashed-session-data
        // return redirect('/')->with([
        //     'searchTerms' => $searchTerms,
        // ]);
    }
}

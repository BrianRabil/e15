<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonDetailController extends Controller
{
    public function show(string $id) {
        $pokeapi = new PokeApiController();
        $pokemon_details = $pokeapi->getPokemonDetails($id);
        // dd($pokemon_details);
        return view('pokemon-detail', [
            'name' => ucwords($pokemon_details->name),
            'sprite' => $pokemon_details->sprites->front_default,
            'moves' => $pokemon_details->moves 
        ]);
    }
}

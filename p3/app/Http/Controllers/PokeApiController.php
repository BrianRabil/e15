<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokeApiController extends Controller
{
    //
    protected $base_uri;

    public int $current_page;
    public int $results_count;
    public array $current_results;

    function __construct($version = 'v2')
    {
        $this->base_uri = "http://pokeapi.co/api/{$version}/";
    }

    private function fetch($endpoint, $base_uri = '') {
        $client = new \GuzzleHttp\Client(['base_uri' => $base_uri]);
        $response = $client->request('GET', $endpoint);
        $result = json_decode($response->getBody()->getContents());
        return $result;
    }

    public function get($resource, $id = null)
    {
        $endpoint = $this->base_uri;
        $endpoint .= $resource;

        if (!empty($id)) {
            $endpoint .= "/{$id}/";
        }

        $result = $this->fetch($endpoint);        

        return $result;
    }

    private function unwrapPokemonResults(array $results) {
        $final = [];
        if ($results) {
            foreach($results as $result) {
                $pokemon_details = $this->fetch($result->url);
                array_push($final, $pokemon_details);
            }
        }
        return $final;
    }

    public function getPokemons() {
        $res = $this->get('pokemon');

        $this->current_page = 1;
        $this->results_count = $res->count;
        $this->current_results = $res->results;
        
        $detailed_results = $this->unwrapPokemonResults($this->current_results);

        return (object)[
            'page' => $this->current_page,
            'count' => $this->results_count,
            'results' => $detailed_results
        ];
    }

    public function loadMorePokemons() {
        $this->current_page = $this->current_page + 1;

    }
    
    public function getPokemonDetails(string $id) {
        if ($id) {
            $res = $this->get('pokemon', $id);
            return $res;
        }
    }
}

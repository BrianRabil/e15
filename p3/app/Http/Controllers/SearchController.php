<?php

namespace App\Http\Controllers;


class SearchController extends Controller
{
    public function __construct()
    {
        # This method will be invoked whenever a Catalog object is instantiated
        $this->results_count = 0;
        $this->results = [];
    }

    public function build_results_list($results) {
        $list_items = [];
        foreach($results as $result) {
            $list_item = (object) [
                'name' => ucwords($result->name),
                'id' => $result->id,
                'sprite' => $result->sprites->front_default,
                // TODO: Show types
            ];
            array_push($list_items, $list_item);
        }
        return $list_items;
    }

    public function show() {
        $pokeapi = new PokeApiController();
        $res = $pokeapi->getPokemons();
        $results = $res->results;
        $results_list = $this->build_results_list($results); 

        return view('search', [
            'results_count' => $res->count,
            'results_list' => $results_list,
        ]);
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Mockery\Undefined;

class CollectionsController extends Controller
{

    public function show(string $id = null)
    {
        if (is_null($id)) {
            return redirect('/collections/1');
        }

        return view('collections', [
            'collections' => Collection::all(),
            'active_collection' => Collection::all()->where('id', '=', $id)->first()
        ]);
    }

    public function handle_collection_click(Collection $collection)
    {
        dd($collection);
    }
}

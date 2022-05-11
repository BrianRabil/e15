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

    public function edit(string $id) {
        $collection = Collection::find($id);

        return view('edit-collection', [
            'collection' => $collection
        ]);
    }

    public function store(Request $request) {
         $formFields = $request->validate([
            'name' => 'required',
        ]);

        Collection::create($formFields);

        return redirect('/collections')->with('flash-alert', 'Collection created');
    }

    public function create() {
        return view('create-collection');
    }

    public function handle_collection_click(Collection $collection)
    {
        dd($collection);
    }
}

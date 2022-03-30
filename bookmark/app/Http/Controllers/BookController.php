<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        # TODO: Query the database for all the books;
        return 'Here are all the books...';
    }

    public function show($title)
    {
        # TODO: Query the database for the book where title = $title

        return view('books/show', [
            'title' => $title
        ]);
    }
}

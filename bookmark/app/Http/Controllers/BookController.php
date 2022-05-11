<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $this->practiceX();
        # TODO: Query the database for all the books;
        return 'Here are all the books...';
    }

    public function practiceX()
    {
        # Instantiate a new Book Model object
        // $book = new Book();

        # Set the properties
        # Note how each property corresponds to a column in the table
        // $book->slug = 'the-martian';
        // $book->title = 'The Martian';
        // $book->author = 'Anthony Weir';
        // $book->published_year = 2011;
        // $book->cover_url = 'https://hes-bookmark.s3.amazonaws.com/the-martian.jpg';
        // $book->info_url = 'https://en.wikipedia.org/wiki/The_Martian_(Weir_novel)';
        // $book->purchase_url = 'https://www.barnesandnoble.com/w/the-martian-andy-weir/1114993828';
        // $book->description = 'The Martian is a 2011 science fiction novel written by Andy Weir. It was his debut novel under his own name. It was originally self-published in 2011; Crown Publishing purchased the rights and re-released it in 2014. The story follows an American astronaut, Mark Watney, as he becomes stranded alone on Mars in the year 2035 and must improvise in order to survive.';

        # Invoke the Eloquent `save` method to generate a new row in the
        # `books` table, with the above data
        // $book->save();

        # Confirm results
        // dump('Added: ' . $book->title);
        // dump(Book::all()->toArray());
        // $books = Book::all();
        // echo $books;

        // $book = new Book();
        // $books = $book->where('title', 'LIKE', '%Harry Potter%')->get();

        $book = Book::where('author', '=', 'Dr. Seuss')->get();
        $book->delete();
        dump('Book deleted.');

        // if ($books->isEmpty()) {
        //     dump('No matches found');
        // } else {
        //     foreach ($books as $book) {
        //         dump($book->title);
        //     }
        // }
    }

    public function show($title)
    {
        # TODO: Query the database for the book where title = $title

        return view('books/show', [
            'title' => $title
        ]);
    }
}

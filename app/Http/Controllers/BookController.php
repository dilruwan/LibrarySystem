<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\BookModule;
use App\Book;

class BookController extends Controller
{
    /**
     * Return book list
     */
    public function index()
    {
        $bookModule = new BookModule();
        $response = $bookModule->list();

        return view('pages.books')->with('data', $response);
    }

    /**
     * Book adding form
     */
    public function add()
    {
        return view('pages.add_book');
    }

    /**
     * Create book
     *
     * Sample data
     * {
     *     "title": "Book title",
     *     "author": "Harry Wilson"
     *     ...
     * }
     */
    public function store(Request $request)
    {
        $book = $this->validate(request(), [
            'title' => 'required',
            'author' => 'required'
        ]);

        Book::create($book);

        return back()->with('success', 'Book has been added successfully');
    }
}

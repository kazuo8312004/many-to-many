<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();
        return view('index', compact('authors', 'books'));
    }

    public function create()
    {
        $authors = Author::all();
        return view('create', compact('authors'));
    }

    public function store(Request $request)
    {
        $authorData = $request->only(['name', 'bio', 'birthdate', 'nationality', 'website', 'photo']);
        $bookData = $request->only(['title', 'genre', 'summary', 'publication_date', 'isbn', 'cover_image', 'price', 'pages']);

        $author = Author::create($authorData);
        $book = Book::create($bookData);
        $book->authors()->attach($author->id);

        return redirect()->route('library.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
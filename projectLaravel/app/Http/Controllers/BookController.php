<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $book = DB::table('books')->get();
        $book = Book::all();
        return view('book.index',compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'isbn' => 'required|size:13',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'category_id' => 'required'
        ]);
        
        Book::create($request->all());
        return redirect('/book')->with('status', 'Successfully Insert Book Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'cover' => 'required'

        ]);
        book::where('id', $book->id)
                ->update([
                    'isbn' => $request->isbn,
                    'title' => $request->title,
                    'author' => $request->author,
                    'publisher' => $request->publisher,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'cover' => $request->cover
                ]);
                return redirect('/book')->with('status', 'Successfully Updated Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        book::destroy($book->id);
        return redirect('/book')->with('status', 'Successfully Deleted Data');
    }
}

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
        $books = Book::all();

        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
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
            'type'=>'required',
            'name'=>'required',
            'author'=>'required',
            'volume'=>'required',
            'publication'=>'required',
            'quantity'=>'required'
        ]);

        $book = new book([
            'type' => $request->get('type'),
            'name' => $request->get('name'),
            'author' => $request->get('author'),
            'volume' => $request->get('volume'),
            'publication' => $request->get('publication'),
            'quantity' => $request->get('quantity')
        ]);
        $book->save();
        return redirect('/books')->with('success', 'book saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type'=>'required',
            'name'=>'required',
            'author'=>'required',
            'volume'=>'required',
            'publication'=>'required',
            'quantity'=>'required'
        ]);

        $book = Book::find($id);
        $book->type =  $request->get('type');
        $book->name = $request->get('name');
        $book->author = $request->get('author');
        $book->volume = $request->get('volume');
        $book->publication = $request->get('publication');
        $book->quantity = $request->get('quantity');
        $book->save();

        return redirect('/books')->with('success', 'Book updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect('/books')->with('success', 'Book deleted!');
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookCreateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::allBook()->latest()->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookCreateRequest $request)
    {
        $validatedData = $request->validated();
        Book::firstOrCreate(['name' => $validatedData['name']], $validatedData);
        return redirect()->back()->with('success', 'Book has been added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookCreateRequest $request, Book $book)
    {
        $validatedData = $request->validated();
        $book->update($validatedData);
        return redirect()->route('books.index')->with('success', 'Book has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->back()->with('success', 'Book has been updated successfully');
    }
    public function bookStatus(Request $request)
    {
        $books = Book::inactive()->latest()->get();
        return view('books.inactive', compact('books'));
    }
}

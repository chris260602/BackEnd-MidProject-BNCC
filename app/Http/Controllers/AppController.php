<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AppController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view("home", compact('books'));
    }
    public function navigateCreatePage()
    {
        return view('create');
    }
    public function createBook(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'releaseDate' => 'required|date',

        ]);
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'release_date' => $request->releaseDate
        ]);
        return redirect('/')->with("status", "success");
    }
    public function navigateEditPage($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }
    public function editBook(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|min:5|max:20',
            'author' => 'required|string|min:5|max:20',
            'pages' => 'required|integer|min:1',
            'releaseDate' => 'required|date',

        ]);
        $book = Book::findOrFail($id);

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'pages' => $request->pages,
            'release_date' => $request->releaseDate
        ]);
        return redirect('/')->with("status", "success");
    }
    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/')->with("status", "success");
    }
}

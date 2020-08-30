<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Book;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('book/index', compact('books'));
    }

    public function edit($id) {
        $book = Book::findOrFail($id);
        return view('book/edit', compact('book'));
    }

    public function update(Request $request, $id) {
        $book = Book::findOrFail($id);
        $book->name = $request->name;
        $book->price = $request->price;
        $book->author = $request->author;
        $book->save();
        return redirect("/book");
    }
}

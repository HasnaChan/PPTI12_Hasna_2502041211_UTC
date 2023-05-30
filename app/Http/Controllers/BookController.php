<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReadingTime;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $bookz = Book::latest()->take(5)->get();
        return view('/home', compact('books','bookz'));
    }

    public function show($id){
        $books = Book::find($id);
        $categories = ReadingTime::all();
        return view('/detail', compact("books","categories"));

    }
}

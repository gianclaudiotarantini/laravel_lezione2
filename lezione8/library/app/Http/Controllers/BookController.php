<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller

{
    public function index()
    {

        //    $books = [
        //   ['pages' => 35],
        //  ['pages' => 23]
        //    ];

        $books = Book::all();
        return view('index', ['books' => $books]);
    }

    public function create()
    {

        return view('create');
    }
}

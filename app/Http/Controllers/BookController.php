<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookSave;

class BookController extends Controller
{
    public function create()
    {
        return view('book.create');
    }

    public function store(BookSave $request)
    {
        return redirect('/book/success');
    }

    public function saveSuccess()
    {
        return view('book.save_success');
    }
}
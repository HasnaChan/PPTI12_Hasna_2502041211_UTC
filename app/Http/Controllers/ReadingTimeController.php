<?php

namespace App\Http\Controllers;

use App\Models\ReadingTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReadingTimeController extends Controller
{
    public function show($id){ //passing paramter yg disini harus sama ky yg di controller
        $category = ReadingTime::find($id);
        $books = $category->Book();

        return view("category", compact("books", "category"));
    }
}

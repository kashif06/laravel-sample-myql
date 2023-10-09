<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::active()->where('parent_id', null)->limit(3)->get();
        return view('home.index', compact('categories'));
    }
}

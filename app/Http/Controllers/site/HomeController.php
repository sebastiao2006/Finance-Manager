<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCard;

class HomeController extends Controller
{
    public function index()
    {
        $blog = Blog::first();
        $cards = BlogCard::all();

        return view('site.home.index', compact('blog', 'cards'));
    }
}


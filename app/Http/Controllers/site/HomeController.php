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

    if (!$blog) {
        $blog = Blog::create([
            'titulo' => 'Fique por dentro das novidades',
            'link_blog' => '#',
        ]);
    }

    $cards = BlogCard::all();

    return view('site.home.index', compact('blog', 'cards'));
}

}


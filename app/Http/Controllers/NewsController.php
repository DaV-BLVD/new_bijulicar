<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsArticle;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch paginated articles, 5 per page
        $articles = NewsArticle::orderBy('published_at', 'asc')->paginate(5);

        return view('frontend.pages.news', compact('articles'));
    }
}

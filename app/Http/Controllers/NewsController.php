<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsArticle;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Fetch paginated articles, 5 per page
        $articles = NewsArticle::orderBy('published_at', 'desc')->paginate(5);
        

        return view('frontend.pages.news', compact('articles'));
    }

    public function show($id)
    {
        $article = NewsArticle::findOrFail($id);
        return view('news.show', compact('article'));
    }
}

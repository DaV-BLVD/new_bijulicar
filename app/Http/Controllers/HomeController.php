<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;

class HomeController extends Controller
{
    public function index()
    {
        $homeAds = Advertisement::with('car')
            ->where('placement', 'home')
            ->where('is_active', true)
            ->where(fn($q) => $q->whereNull('starts_at')->orWhereDate('starts_at', '<=', today()))
            ->where(fn($q) => $q->whereNull('ends_at')->orWhereDate('ends_at', '>=', today()))
            ->get();

        return view('frontend.pages.home', compact('homeAds'));
    }
}
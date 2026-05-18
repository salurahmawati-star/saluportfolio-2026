<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

        return view('portfolio-detail', compact('portfolio'));
    }
}
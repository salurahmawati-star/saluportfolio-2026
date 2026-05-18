<?php

use Illuminate\Support\Facades\Route;
use App\Models\Portfolio;
use App\Http\Controllers\ContactMessageController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| PORTFOLIO LIST
|--------------------------------------------------------------------------
*/

Route::get('/portfolio', function () {

    $portfolios = Portfolio::latest()->get();

    return view('portfolio.index', compact('portfolios'));

})->name('portfolio.index');

/*
|--------------------------------------------------------------------------
| PORTFOLIO DETAIL
|--------------------------------------------------------------------------
*/

Route::get('/portfolio/{slug}', function ($slug) {

    $portfolio = Portfolio::where('slug', $slug)->firstOrFail();

    return view('portfolio.detail', compact('portfolio'));

})->name('portfolio.show');

/*
|--------------------------------------------------------------------------
| CONTACT FORM
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->name('contact.store');
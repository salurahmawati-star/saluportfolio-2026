<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;
use App\Models\Setting;
use App\Http\Controllers\ContactMessageController;

/*
|--------------------------------------------------------------------------
| HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $settings = Setting::pluck('value', 'key');

    return view('home', compact('settings'));

})->name('home');

/*
|--------------------------------------------------------------------------
| PROJECT LIST
|--------------------------------------------------------------------------
*/

Route::get('/projects', function () {

    $projects = Project::latest()->get();

    return view('portfolio.index', compact('projects'));

})->name('project.index');

/*
|--------------------------------------------------------------------------
| PROJECT DETAIL
|--------------------------------------------------------------------------
*/

Route::get('/project/{project}', function (Project $project) {

    return view('portfolio.detail', compact('project'));

})->name('project.show');

/*
|--------------------------------------------------------------------------
| CONTACT FORM
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->name('contact.store');
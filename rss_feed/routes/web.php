<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\RssController;

Route::get('/rss', [RssController::class, 'index']);

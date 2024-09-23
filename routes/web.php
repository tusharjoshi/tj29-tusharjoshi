<?php

use App\Http\Controllers\DailyWordController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('/language.switch', LanguageController::class)->name('language.switch');

$routes = config('info.routes');

foreach ($routes as $route) {
    Route::get($route['path'], function () use ($route) {
        return view($route['view']);
    })->name($route['name']);
}

Route::fallback(function () {
    return view('errors.404');
})->name("404");

Route::permanentRedirect('/aboutme', '/projects/college');

Route::get('/joke', function() {
    return '<h1>This is funny.</h1>';
})->name('joke');

Route::get('/newtushar/{myparam?}', function(Request $request, $myparam = 'Default Value') {

    return view('tushar', [
        "title"=>"My Sample title",
        "book"=>$request->query('book'),
        "myparam"=>$myparam,
]);
})->name('newtushar');

Route::get(
    '/word',
    [DailyWordController::class, 'getWord']
)->name('word');

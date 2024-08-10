<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __invoke(Request $request)
    {
        $language = $request->input('lang', 'en');
        session(['language' => $language]);
        return redirect()->back();
    }
}

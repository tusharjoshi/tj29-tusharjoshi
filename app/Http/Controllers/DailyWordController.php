<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class DailyWordController extends Controller
{
    public function getWord(Request $request) {
        $name = $request->query('name');
        if ($name == 'college') {
            try {
                throw new Exception('Division by zero.');
                return view("tushar", [
                    "title"=>"My Sample title",
                    "book"=>"My Book",
                    "myparam"=>"some value",
                ]);
            } catch (Exception $e) {
                return view("errors.404");
            }


        } else {
            return view("word");
        }
    }
}

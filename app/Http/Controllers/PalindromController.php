<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromController extends Controller
{
    public function index()
    {
        return view('palindrom');
    }

    public function check(Request $request)
    {
        $request->validate([
            'input_text' => 'required|string',
        ]);

        $text = $request->input('input_text');
        $isPalindrom = strtolower($text) === strrev(strtolower($text));

        return view('palindrom', [
            'text' => $text,
            'isPalindrom' => $isPalindrom,
        ]);
    }
}

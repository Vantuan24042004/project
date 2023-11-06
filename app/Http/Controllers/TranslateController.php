<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateController extends Controller
{
    public function translate(Request $request)
    {
        $tr = new GoogleTranslate($request->input('translate')); // Translate to target translate
        $translatedText = $tr->translate($request->input('text'));

        return response()->json(['translatedText' => $translatedText]);
    }
}


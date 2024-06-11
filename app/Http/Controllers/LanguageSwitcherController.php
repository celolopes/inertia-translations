<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lang\Lang;

class LanguageSwitcherController extends Controller
{
    public function __invoke(Request $request) {
        session()
        ->put('language', Lang::tryFrom($request->language)?->value ?? config('app.locale'));

        return back();
    }
}

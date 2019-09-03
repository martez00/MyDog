<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function change($locale)
    {
        \Session::put('locale', $locale);
        return redirect()->back();
    }
}

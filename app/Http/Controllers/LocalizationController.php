<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $setLang = session()->put('locale', $lang);
//        dd(session()->get('locale'));
        \App::setLocale($lang);
        return back();
    }
}

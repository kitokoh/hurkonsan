<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomerReview;
use App\Models\Admin\About;
use App\Models\Admin\Product;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        $customerReview = CustomerReview::all();
        $lastProducts = Product::orderby('id','desc')->limit(6)->get();

        return view('site.pages.about.about', compact('about', 'customerReview','lastProducts'));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Blog;
use App\Models\Admin\CustomerReview;
use App\Models\Admin\Product;
use App\Models\Admin\Reference;
use App\Models\Admin\Slider;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::first();
        $product = Product::orderby('id','desc')->limit(8)->get();
        $reference = Reference::all();
        $customerReview = CustomerReview::all();
        $sliders = Slider::all();
        $lastBlogs = Blog::orderby('id','desc')->limit(6)->get();

        return view('site.pages.home', compact('product', 'reference', 'about','customerReview','sliders','lastBlogs'));
    }
}

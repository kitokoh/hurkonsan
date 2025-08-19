<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Blog;
use App\Models\Admin\Services;
use App\Models\Admin\About;

class SitemapController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        $blogs = Blog::latest()->get();
        // Assuming you have a general 'pages' concept or other models
        // For now, let's add static pages manually
        $staticPages = [
            ['url' => route('front.home'), 'lastmod' => '2023-01-01'],
            ['url' => route('front.about'), 'lastmod' => '2023-01-01'],
            ['url' => route('front.contact'), 'lastmod' => '2023-01-01'],
            ['url' => route('product.products'), 'lastmod' => '2023-01-01'],
            ['url' => route('blog.blogs'), 'lastmod' => '2023-01-01'],
            ['url' => route('services'), 'lastmod' => '2023-01-01'],
        ];

        return response()->view('sitemap', [
            'products' => $products,
            'blogs' => $blogs,
            'staticPages' => $staticPages,
        ])->header('Content-Type', 'text/xml');
    }
}

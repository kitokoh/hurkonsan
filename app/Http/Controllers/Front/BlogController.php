<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(6);
        return view('site.pages.blog.blog', compact('blogs'));
    }

    public function blogDetail($slug)
    {

        $currentLocale = app()->getLocale();
        $query = Blog::query();


//        $jsonQueryString = 'JSON_EXTRACT(slug, "$.'. $currentLocale . '")';

        $jsonQueryStringTR = 'JSON_EXTRACT(slug, "$.tr")';
        $jsonQueryStringEN = 'JSON_EXTRACT(slug, "$.en")';
        $jsonQueryStringAR = 'JSON_EXTRACT(slug, "$.ar")';

        $blog = $query->where(DB::raw($jsonQueryStringTR), $slug)
            ->orWhere(DB::raw($jsonQueryStringEN), $slug)
            ->orWhere(DB::raw($jsonQueryStringAR), $slug)
            ->first();

        $another_blog = Blog::where('slug','!=',$blog->slug)->inRandomOrder()->get();
        return view('site.pages.blog.blog_detail',compact('blog','another_blog'));
    }
}

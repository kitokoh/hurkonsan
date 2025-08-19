<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Reference;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::paginate(16);
        return view('site.pages.references.references', compact('references'));
    }
}

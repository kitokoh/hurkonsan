<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\About;
use App\Models\Admin\Settings;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $settings = Settings::first();
        return view('site.pages.contact.contact',compact('settings'));
    }
}

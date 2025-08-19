<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CustomerReview;
use Illuminate\Http\Request;
use App\Models\Admin\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $about = About::all()->first();
        return view('admin.pages.about.edit', compact('about'));
    }

    public function edit($id)
    {
        $about = About::first();
        return view('admin.pages.about.edit', compact('about'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $about = About::first();
        return view('admin.pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        $about = About::first();
        //FIXME content laravel iceriği
        $about->text = $request->text;
        $about->save();
        if ($about) {
            return redirect()->route('about.edit', $about->id)->with('success', 'Başarıyla Güncellendi');
        }
        return back()->with('error', 'Güncellenirken Hata Oluştu');
    }
}

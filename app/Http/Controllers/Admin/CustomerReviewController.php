<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Str;
use App\Models\Admin\CustomerReview;
use Illuminate\Http\Request;
use Symfony\Component\Finder\Finder;

class CustomerReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $customerReview = CustomerReview::all();
        return view('admin.pages.review.index', compact('customerReview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.review.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $customerReview = new CustomerReview();

        $customerReview->name = $request->name;
        $customerReview->setTranslations('review',$request->review);
        $customerReview->setTranslations('job',$request->job);

        $saved = $customerReview->save();

        if ($request->hasFile('image')) {
            $fileName = 'customerReview/' . $customerReview->id;
            $customerReview->image = $request->file('image')->store($fileName, 'public2');
            $saved = $customerReview->save();
        }
        if ($saved) {
            return redirect()->route('review.index')->with('success', 'Inceleme başarıyla eklendi');
        }
        return back()->with('error', 'İncleme eklenirken bir problem oluştu lütfen tekrar deneyiniz');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $customerReview = CustomerReview::find($id);
        return view('admin.pages.review.edit', compact('customerReview'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        //$customerReview = new CustomerReview($id);
        $customerReview = CustomerReview::find($id);
        //$slug = Str::slug($request->name . '-' . rand(100, 10000), '-');

        $customerReview->name = $request->name;
        $customerReview->review = $request->review;
        $customerReview->job = $request->job;

        $saved = $customerReview->update();

        if ($request->hasFile('image')) {
            $fileName = 'customerReview/' . $customerReview->id;
            $customerReview->image = $request->file('image')->store($fileName, 'public2');
            $saved = $customerReview->update();
        }
        if ($saved) {
            return redirect()->route('review.index')->with('success', 'Yorum başarıyla Düzenlendi');
        }
        return back()->with('error', 'Yorum düzenlenirken bir problem oluştu lütfen tekrar deneyiniz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $customerReview = CustomerReview::find($id);
        $customerReview->delete();

        if ($customerReview) {
            return back()->with('success', 'Yorum başarıyla silindi.');
        }
        return back()->with('error', 'Bir hata oluştu.');
    }
}

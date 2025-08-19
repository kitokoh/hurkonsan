<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $blog = new Blog();

        $slugs = [];
        foreach ($request->name as $locale => $name) {
            $slugs[$locale] = Str::slug($name.'-'.rand(100, 10000), '-');
        }
        $blog->setTranslations('slug', $slugs);

        $blog->setTranslations('name', $request->name);
        $blog->setTranslations('text', $request->text);

        //$saved = $blog->save();

        /*if ($request->hasFile('image')) {
            $fileName = 'blogs/' . $blog->id;
            $blog->image = $request->file('image')->store($fileName, 'public2');
            $saved = $blog->save();
        }*/


        if ($request->hasFile('image')) {
            $itemsArray = [];

            $url = $request->file('image')->store('blogs', 'public2');

            array_push($itemsArray, $url);

            $image = json_encode($itemsArray);
        } else {
            $image = "";
        }

        if ($request->hasFile('image_inner_page')) {
            $itemsArray1 = [];

            $url = $request->file('image_inner_page')->store('blogs', 'public2');

            array_push($itemsArray1, $url);

            $image1 = json_encode($itemsArray1);
        } else {
            $image1 = "";
        }
        $blog->image = $image;
        $blog->image_inner_page = $image1;
        $saved = $blog->save();



        if ($saved) {
            return redirect()->route('blogs.index')->with('success', 'Blog başarıyla eklendi');
        }
        return back()->with('error', 'Blog eklenirken bir problem oluştu lütfen tekrar deneyiniz');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.pages.blogs.edit', compact('blog'));
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
        $blog = Blog::find($id);
        //dd($request->all());
        $slugs = [];
        foreach ($request->name as $locale => $name) {
            $slugs[$locale] = Str::slug($name.'-'.rand(100, 10000), '-');
        }
        $blog->setTranslations('slug', $slugs);
        $blog->name = $request->name;
        $blog->text = $request->text;



        if ($request->hasFile('image')) {
            $itemsArray = [];

            $url = $request->file('image')->store('blogs', 'public2');

            array_push($itemsArray, $url);

            $image = json_encode($itemsArray);
            $blog->image = $image;
        }

        if ($request->hasFile('image_inner_page')) {
            $itemsArray = [];

            $url = $request->file('image_inner_page')->store('blogs', 'public2');

            array_push($itemsArray, $url);

            $image1 = json_encode($itemsArray);
            $blog->image_inner_page = $image1;
        }


        $saved = $blog->update();
        /*$formFields = [
            $blog->name = $request->name,
            //$blog->slug = $slug,
            $blog->text = $request->text,
            $blog->image = $blogImage,
            $blog->author = $request->author,

        ];*/

        //$blog->update($formFields);
        if ($saved)
            return redirect()->route('blogs.edit', $blog->id)->with('success', 'Başarıyla Güncellendi');
        else
            return back()->with('error', 'Güncellenirken Hata Oluştu');

        /*if ($saved) {
            return view('admin.pages.blogs.edit')->with('success', 'Başarıyla Eklendi');
        } else {
            return back()->with('erorr', 'Excellence işlemi yapılırken,hata oluştu lütfen tekrar deneyiniz!');
        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        if ($blog) {
            return back()->with('success', 'Blog başarıyla silindi.');
        }
        return back()->with('error', 'Bir hata oluştu.');
    }
}

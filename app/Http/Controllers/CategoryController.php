<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories.index', ['categories' => $categories]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        /*$category = Category::create([
            'name' => $request->input('name')
        ]);*/
        $category->setTranslations('name',$request->name);
        $category->order_number = $request->order_number;
        $saved = $category->save();
        if ($saved)
            return redirect()->route('categories.create')->with('success', 'Başarıyla Eklendi');
        else
            return back()->with('error', 'Eklenirken Hata Oluştu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.pages.categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /*$category->update([
          'name' =>  $request->input('name')
        ]);*/
        $category = Category::find($id);
        //$category->name = $request->name;
        $category->setTranslations('name',$request->name);
        $category->order_number = $request->order_number;
        $saved = $category->update();

        if ($saved)
            return redirect()->route('categories.index', $category->id)->with('success', 'Başarıyla Güncellendi');
        else
            return back()->with('error', 'Güncellenirken Hata Oluştu');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);

        $deleted = $categories->delete();

        if ($deleted) {
            return back()->with('success', 'Kategori silindi.');
        } else {
            return back()->with('error', 'Bir hata oluştu.');
        }
    }
}

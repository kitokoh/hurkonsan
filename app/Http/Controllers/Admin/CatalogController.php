<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::orderby('id','desc')->get();
        return view('admin.pages.catalog.index',compact('catalogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $catalog = new Catalog();
        $catalog->name = $request->name;
        $catalog->save();
        if ($request->hasFile('images')) {
            $itemsArray = [];

            $url = $request->file('images')->store('catalogs', 'public2');

            array_push($itemsArray, $url);

            $image = json_encode($itemsArray);
        } else {
            $image = '[0]';
        }

        if ($request->hasFile('image_inner_page')) {
            $image2 = $request->file('image_inner_page')->store('catalogs', 'public2');
        } else {
            $image2 = '[0]';
        }
        $catalog->image = $image;
        $catalog->image_inner_page = $image2;
        $catalog->save();
        if ($catalog) {
            return redirect()->route('catalog.index')->with('success', 'Katalog başarıyla eklendi');
        }
        return back()->with('error', 'Katalog eklenirken bir problem oluştu lütfen tekrar deneyiniz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalog = Catalog::find($id);
        return view('admin.pages.catalog.edit',compact('catalog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $catalog = Catalog::find($id);
        $catalog->name = $request->name;
        $catalog->update();
        if ($request->hasFile('images')) {
            $itemsArray = [];

            $url = $request->file('images')->store('catalogs', 'public2');

            array_push($itemsArray, $url);

            $image = json_encode($itemsArray);
            $catalog->image = $image;
        }

        if ($request->hasFile('image_inner_page')) {
            $image2 = $request->file('image_inner_page')->store('catalogs', 'public2');
            $catalog->image_inner_page = $image2;
        }
        $catalog->update();
        if ($catalog) {
            return redirect()->route('catalog.index')->with('success', 'Katalog başarıyla güncellendi');
        }
        return back()->with('error', 'Katalog eklenirken bir problem oluştu lütfen tekrar deneyiniz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $catalog = Catalog::find($id);
        $catalog->delete();
        if ($catalog) {
            return back()->with('success', 'Katalog silindi.');
        } else {
            return back()->with('error', 'Bir hata oluştu.');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Reference::all();
        return view('admin.pages.references.index',['references'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.references.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $ref = new Reference();
        $ref->save();

        /*if ($request->hasFile('image')) {
            $fileName = 'products/' . $product->id;
            $product->image = $request->file('image')->store($fileName, 'public2');
            $product->save();
        }*/

        if ($request->hasFile('image')) {
            if (!File::exists("storage/references")){
                File::makeDirectory("storage/references");
            }
            $fileName = 'references/' . $ref->id;
            //dd($fileName);
            $ref->image = $request->file('image')->store($fileName, 'public2');
            $ref->save();
        }
        /*if ($request->hasFile('image')){
            if (!File::exists("storage/references")){
                File::makeDirectory("storage/references");
            }
            $img = $request->file('image');
            $fileName1 = '/references/'."_".time(). '.' . $img->getClientOriginalExtension();
            //dd($fileName1);
            Image::make($img)->save(public_path('/storage' . $fileName1));
            $ref->image =json_decode($fileName1);
        }*/
        else{
            $ref->image = null;
        }
        $ref->name =$request->name;
        $ref->reference_url = $request->reference_url;
        $save = $ref->save();
        if ($save){
            return redirect()->route('references.create')->with('success','Başarıyla Eklendi');
        }
        else{
            return back()->with('error','Eklenirken Hata Oluştu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ref = Reference::find($id);
        return view('admin.pages.references.edit',['reference'=>$ref]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //dd($request);
        $ref = Reference::find($id);
        $ref->name = $request->name;
        $ref->reference_url = $request->reference_url;
        $save = $ref->save();
        if($request->hasFile('image')){
            $fileName = 'references/' . $ref->id;
            //dd($fileName);
            $ref->image = $request->file('image')->store($fileName, 'public2');
            $ref->save();
        }
        if ($save){
            return redirect()->route('references.index')->with('success','Başarıyla Güncellendi');
        }
        else{
            return back()->with('error','Güncellenirken Hata Oluştu');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ref = Reference::find($id);
        $delete =$ref->delete();

        if ($delete) {
            return back()->with('success', 'Ürün başarıyla silindi');
        }
        return back()->with('erorr', 'Ürün silinirken bir hata oluştu lütfen tekrar deneyiniz');
    }
}

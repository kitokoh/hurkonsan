<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider= new Slider();

        $slider->setTranslations('name',$request->name);

        $saveProduct = $slider->save();

        $id = $slider->id;
        if ($request->hasFile('image')) {
            $itemsArray1 = [];
            //dd($request->file('image'));
            foreach ($request->file('image') as $key => $photo){
                //$itemsArray2 = [];

                if (!File::exists("storage/sliders/" . $id)) {
                    File::makeDirectory("storage/sliders/" . $id);
                }

                $img = $photo;

                $fileName1= '/sliders/' . $id . "/" . $key . "_" . time(). '.'. $photo->getClientOriginalExtension();
                Image::make($img)->save(public_path('/storage' . $fileName1));

                //array_push($itemsArray2,$fileName1);
                array_push($itemsArray1,$fileName1);
            }
            $slider->image = json_encode($itemsArray1);
        }else{
            $slider->image = "[0]";
        }
        $slider->save();


        if ($saveProduct) {
            return redirect()->route('sliders.index')->with('success', 'Slider başarıyla eklendi');
        }
        return back()->with('error', 'Slider eklenirken bir problem oluştu lütfen tekrar deneyiniz');

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
        $slider = Slider::find($id);
        return view('admin.pages.sliders.edit',compact('slider'));
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
        $slider = Slider::find($id);
        $slider->setTranslations('name',$request->name);

        $saveProduct = $slider->update();

        $id = $slider->id;
        if ($request->hasFile('image')) {
            $itemsArray1 = [];
            //dd($request->file('image'));
            foreach ($request->file('image') as $key => $photo){
                //$itemsArray2 = [];

                if (!File::exists("storage/sliders/" . $id)) {
                    File::makeDirectory("storage/sliders/" . $id);
                }

                $img = $photo;

                $fileName1= '/sliders/' . $id . "/" . $key . "_" . time(). '.'. $photo->getClientOriginalExtension();
                Image::make($img)->save(public_path('/storage' . $fileName1));

                //array_push($itemsArray2,$fileName1);
                array_push($itemsArray1,$fileName1);
            }
            $slider->image = json_encode($itemsArray1);
        }
        $slider->update();


        if ($saveProduct) {
            return redirect()->route('sliders.index')->with('success', 'Slider başarıyla düzenlendi');
        }
        return back()->with('error', 'Slider düzenlenirken bir problem oluştu lütfen tekrar deneyiniz');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();

        if ($sliders) {
            return back()->with('success', 'Slider başarıyla silindi');
        }
        return back()->with('erorr', 'Slider silinirken bir hata oluştu lütfen tekrar deneyiniz');
    }
}

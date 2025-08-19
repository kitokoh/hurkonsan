<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use function PHPUnit\Framework\fileExists;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        //$products = Product::with('category')->paginate(5);
        $products = Product::orderby('id','desc')->get();
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $category = Category::all();
        //dd($category);
        return view('admin.pages.products.create',['category'=>$category]);
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
        $product = new Product();

        //$product->title = $request->title;
        $product->setTranslations('title',$request->title);
        /*if($request->youtube_link != null){
            $product->youtube_link = "https://www.youtube.com/embed/" . $request->youtube_link;
        }else{
            $product->youtube_link = null;
        }*/
        if ($request->text !=null){
            $product->setTranslations('text',$request->text);
            //$product->text_status = 1;
        }
        else{
            $product->text = null;
            //$product->text_status = 0;
        }
        if ($request->properties !=null){
            $product->setTranslations('properties',$request->properties);
        }
        else{
            $product->properties = null;
        }

        // category
        $product->category_id = $request->category_id;

        $saveProduct = $product->save();

        $id = $product->id;

        if ($request->hasFile('image_tecnical')) {
            $fileName = 'products/' . $product->id;
            $product->image_tecnical = $request->file('image_tecnical')->store($fileName, 'public2');
            $product->save();
        }

        if ($request->hasFile('image')) {
            $itemsArray1 = [];
            //dd($request->file('image'));
            foreach ($request->file('image') as $key => $photo){
                //dd("dsfs");
                //$itemsArray2 = [];

                if (!File::exists("storage/products/" . $id)) {
                    File::makeDirectory("storage/products/" . $id);
                }

                $img = $photo;

                $fileName1= '/products/' . $id . "/" . $key . "_" . time(). '.'. $photo->getClientOriginalExtension();
                Image::make($img)->save(public_path('/storage' . $fileName1));

                //array_push($itemsArray2,$fileName1);
                array_push($itemsArray1,$fileName1);
            }
            $product->image = json_encode($itemsArray1);
        }else{
            $product->image = "[0]";
        }
        $product->save();

        /*if ($request->hasFile('image')) {

            dd($request);
            $itemsArray1 = [];
            foreach ($request->hasFile('image') as $item) {

                $fileName = 'products/' . $product->id;
                $product->image = $request->file('image')->store($fileName, 'public2');
                $product->save();
            }

        }*/


        if ($saveProduct) {
            return redirect()->route('products.index')->with('success', 'Ürün başarıyla eklendi');
        }
        return back()->with('error', 'Ürün eklenirken bir problem oluştu lütfen tekrar deneyiniz');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        //dd($id);
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.pages.products.edit',compact('product'),compact('category'));
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
        $product = Product::find($id);

        $product->title = $request->title;
        /*if($request->youtube_link != null){
            $product->youtube_link = "https://www.youtube.com/embed/" . $request->youtube_link;
        }else{
            $product->youtube_link = null;
        }*/
        if ($request->text !=null){
            $product->setTranslations('text',$request->text);
            //$product->text_status = 1;
        }
        else{
            $product->text = null;
            //$product->text_status = 0;
        }

        if ($request->properties !=null){
            $product->setTranslations('properties',$request->properties);
        }
        else{
            $product->properties = null;
        }

        // category
        $product->category_id = $request->category_id;
        $saveProduct = $product->update();
        //dd($saveProduct);

        $id = $product->id;

        if ($request->hasFile('image_tecnical')) {
            $fileName = 'products/' . $product->id;
            $product->image_tecnical = $request->file('image_tecnical')->store($fileName, 'public2');
        }

        if ($request->hasFile('image')) {
            $itemsArray1 = [];
            //dd($request->file('image'));
            foreach ($request->file('image') as $key => $photo){
                //dd("dsfs");
                //$itemsArray2 = [];

                if (!File::exists("storage/products/" . $id)) {
                    File::makeDirectory("storage/products/" . $id);
                }

                $img = $photo;

                $fileName1= '/products/' . $id . "/" . $key . "_" . time(). '.'. $photo->getClientOriginalExtension();
                Image::make($img)->save(public_path('/storage' . $fileName1));

                //array_push($itemsArray2,$fileName1);
                array_push($itemsArray1,$fileName1);
            }
            $product->image = json_encode($itemsArray1);
        }
        $product->update();


        if ($saveProduct) {
            return redirect()->route('products.index')->with('success', 'Ürün başarıyla güncellendi');
        }
        return back()->with('error', 'Ürün eklenirken bir problem oluştu lütfen tekrar deneyiniz');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id, Request $request)
    {
        $product = Product::find($id);
        $product->delete();

        if ($product) {
            return back()->with('success', 'Ürün başarıyla silindi');
        }
        return back()->with('erorr', 'Ürün silinirken bir hata oluştu lütfen tekrar deneyiniz');
    }
}

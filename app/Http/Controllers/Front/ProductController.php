<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::orderby('id','desc')->with('category')->get();
        $categories = Category::orderby('order_number','asc')->get();
        return view('site.pages.products.products', compact('products','categories'));
    }
    public function index2($id)
    {
        $products = Product::where('category_id',$id)->get();
        return view('site.pages.products.products', compact('products'));
    }

    public function productDetail($id)
    {
        $productAll = Product::all()->take(4);
        $product = Product::where('id', $id)->first();
        $itemsArray1 = [];
        array_push($itemsArray1,$product->basket_diameter);
        array_push($itemsArray1,$product->tank_capacity);
        array_push($itemsArray1,$product->loading_height);
        array_push($itemsArray1,$product->pump_pressure);
        array_push($itemsArray1,$product->loading_weight);
        array_push($itemsArray1,$product->power);
        array_push($itemsArray1,$product->working_electric_power);
        $status=0;
        foreach ($itemsArray1 as $item){
            if($item!=null){
                $status = 1;
            }
        }
        //dd($status);
        /*if (!in_array(null,$itemsArray1,true)){
           foreach ($itemsArray1 as $item){
               dd("dsc");
           }
        }
        else
        {
            dd("doscp");
        }*/

        $another_product = Product::where('id', '!=', $id)->inRandomOrder()->limit(3)->get();

        return view('site.pages.products.product_detail', ['product' => $product, 'another_product' => $another_product, 'productAll' => $productAll,'status'=>$status]);
    }
}

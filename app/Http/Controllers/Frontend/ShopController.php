<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Attribute;



class ShopController extends Controller
{
    public function index()
    {
        $attr = Attribute::where('name', 'size')->get();
        $product=Product::where('status',1)->paginate(8);
        // $pro_price =
        // dd($product);
        foreach ($product as $key=> $value) {
            $details = isset($value->product_details)?$value->product_details:[];
            if (isset($details[0])){
                $value->setAttribute('id_detail', $details[0]['id']);
                $value->setAttribute('quantity', $details[0]['quantity']);
            }
            else{
                $value->setAttribute('id_detail', '0');
                $value->setAttribute('quantity', '0');
            }
            // dd($value->id_detail);
        }

        // dd($product->lastItem());
        return view('frontend.pages.shop', compact('product', 'attr'));
    }
    public function cate($slug)
    {

        $cate_slug = Category::where('slug', $slug)->first();
        $id = $cate_slug->id;
        $pro_cate = Product::where('id_cate', $id)->paginate(6);
        foreach ($pro_cate as $value) {
            $details = isset($value->product_details)?$value->product_details:[];
            if (isset($details[0])){
                $value->setAttribute('id_detail', $details[0]['id']);
                $value->setAttribute('quantity', $details[0]['quantity']);
            }
            else{
                $value->setAttribute('id_detail', '0');
                $value->setAttribute('quantity', '0');
            }
        }
        // dd($pro_cate->hasPages());
        return view('frontend.pages.danh-muc-shop', compact('pro_cate', 'cate_slug'));
    }
    public function shop_new()
    {
        $attr = Attribute::where('name', 'size')->get();
        $product=Product::where('status',1)->orderby('created_at','desc')->paginate(8);
        foreach ($product as $key=> $value) {
            $details = isset($value->product_details)?$value->product_details:[];
            if (isset($details[0])){
                $value->setAttribute('id_detail', $details[0]['id']);
                $value->setAttribute('quantity', $details[0]['quantity']);
            }
            else{
                $value->setAttribute('id_detail', '0');
                $value->setAttribute('quantity', '0');
            }
            // dd($value->id_detail);
        }

        // dd($product->lastItem());
        return view('frontend.pages.shop_new', compact('product', 'attr'));
    }
}

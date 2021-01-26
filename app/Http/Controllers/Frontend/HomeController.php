<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;


class HomeController extends Controller
{
    public function index()
    {
        $banner = Banner::where('status', 1)->limit(3)->get();
        $product_new=Product::orderby('created_at', 'desc')->limit(6)->get();
        foreach ($product_new as $value) {
            $details = isset($value->product_details)?$value->product_details:[];
            if (isset($details[0])) {
                $value->setAttribute('id_detail', $details[0]['id']);
                $value->setAttribute('quantity', $details[0]['quantity']);
            }else {
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('quantity', 0);
            }
        }
        $product_featured = Product::where('featured', 1)->limit(6)->get();
        // dd($product_featured[0]->product_details[0]->id);
        foreach ($product_featured as $value) {
            $details = isset($value->product_details)?$value->product_details:[];
            if (isset($details[0])) {
                $value->setAttribute('id_detail', $details[0]['id']);
                $value->setAttribute('quantity', $details[0]['quantity']);
            }else {
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('quantity', 0);
            }
        }
        return view('frontend.pages.home', compact('banner', 'product_new','product_featured'));
    }
}

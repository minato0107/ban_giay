<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product_detail;
use App\Models\Product;
use App\Models\Image_pro;
use App\Models\Attribute;
use App\Models\Review;

class Product_detailController extends Controller
{
    public function index($slug, $id_detail)
    {
        // dd($pro->product_details);
        $attr = Attribute::all();
        $product_slug = Product::where('slug', $slug)->first();
        $id = $product_slug->id;
        $id_cate = $product_slug->id_cate;
        $product_cate = Product::where('id_cate', $id_cate)->where('id', '!=', $id)->limit(6)->get();
        foreach ($product_cate as $value) {
            $detail = isset($value->product_details)?$value->product_details:[];
            if (isset($detail[0])) {
                $value->setAttribute('id_detail', $detail[0]['id']);
                $value->setAttribute('quantity', $detail[0]['quantity']);
            }else {
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('quantity', 0);
            }
        }
        $image_pro = Image_pro::where('id_product', $id)->get();
        $list  = Product_detail::getList($id);
        // dd($list);
        $product_detail = Product_detail::find($id_detail);
        $id_attr = json_decode($product_detail->id_attr);
        // dd($id_attr->size);
        $reviews = Review::where('status', 1)->where('id_product', $id)->orderby('created_at', 'desc')->get();
        // dd($reviews);
        $one=0;
        $two=0;
        $three=0;
        $four=0;
        $five=0;
        $star=ceil($reviews->avg('star'));
        // dd($star);
        foreach ($reviews as $key => $value){
            switch ($value->star) {
                case '1':
                    $one+=1;
                    break;
                case '2':
                    # code...
                    $two+=1;
                    break;
                case '3':
                    # code...
                    $three+=1;

                    break;
                case '4':
                    # code...
                    $four+=1;
                    break;
                default:
                    # code...
                    $five+=1;
                    break;
            }
        }
        return view('frontend.pages.product_detail', compact('product_slug', 'image_pro','attr','list', 'product_detail', 'id_attr', 'slug', 'product_cate', 'reviews', 'one', 'two', 'three', 'four', 'five', 'star'));
    }
}

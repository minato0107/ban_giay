<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;


class SearchController extends Controller
{
    public function search(Request $req)
    {
        $id_cate = $req->id_cate;
        if ($id_cate=='') {
            $product=Product::where('status',1)->where('name','like', '%'.$req->keyword.'%')->orderby('created_at','desc')->paginate(9);
        }else{
        $product=Product::where('status',1)->where('id_cate', $id_cate)->where('name','like', '%'.$req->keyword.'%')->orderby('created_at','desc')->paginate(9);
        }
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
        // dd($product->firstItem());
        return view('frontend.pages.search',compact('product'));
    }
}

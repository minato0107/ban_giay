<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product;
use App\Models\Review;



class ReviewController extends Controller
{
    public function review(Request $req, $slug)
    {
        // dd($req->all());
        $validated = $req->validate([
            'content'=>'required',
        ],[
            'content.required'=>'Bạn phải nhập nội dung',
        ]);
        $product_slug = Product::where('slug', $slug)->first();
        $review = new Review;
        $review->id_product = $product_slug->id;
        $review->id_user = Auth::user()->id;
        $review->star = $req->star;
        $review->content = $req->content;
        $review->status = $req->status?$req->status:1;
        $review->save();
        return redirect()->back();
        // dd($review);
    }
}

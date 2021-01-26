<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Product_detail;
// use App\Models\Product;
use Auth;

class WishlistController extends Controller
{
    public function index($id_user)
    {
        $user = Auth::user();
        if ($user) {
            $wishlist = Wishlist::where('id_user', $id_user)->get();
            return view('frontend.pages.wishlist', compact('wishlist'));
        }else {
            return redirect()->route('login');
        }
    }
    public function post_wishlist($id_user, $id_pro_detail)
    {
        $wishlist = new Wishlist;
        $wishlist->id_user = $id_user;
        $wishlist->id_pro_detail = $id_pro_detail;
        $wishlist->save();
        return redirect()->route('wishlist', $id_user)->with('success', 'Thêm vào yêu thích thành công');
    }
    public function delete_wishlist($id_user, $id_wishlist)
    {
        // dd($id_pro_detail);
        $check = Wishlist::find($id_wishlist);
        // dd($check);
        $check->delete();
        return redirect()->back()->with('success', 'Xóa sản phẩm yêu thích thành công');
    }
}

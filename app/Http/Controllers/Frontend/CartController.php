<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Product_detail;
use Cart;

class CartController extends Controller
{
    public function index()
    {
            return view('frontend.pages.cart');
    }

    public function add(Request $req, $id_detail)
    {
        $product_detail = Product_detail::find($id_detail);
        $id = $product_detail->id_product;
        $list  = Product_detail::getList($id);
        $size = $req->size;
        $color = $req->color;
        $qty = $req->qty?$req->qty:1;
        $name = $product_detail->product_details->name;
        $slug = $product_detail->product_details->slug;
        $image = $product_detail->product_details->image;
        $price = $product_detail->product_details->sale_price?$product_detail->product_details->sale_price:$product_detail->product_details->price;
        $cartItem = Cart::add([
            'id'=>$id_detail,
            'name'=>$name,
            'slug'=>$slug,
            'image'=>$image,
            'price'=>$price,
            'qty'=>$qty,
            'options' => ['size' => $size, 'color'=>$color]
        ]);
        Cart::associate($cartItem->rowId, new Product_detail);
        return redirect()->route('cart')->with('success', 'Thêm vào giỏ hàng thành công');
    }
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()->with('success', 'Xóa 1 item trong giỏ hàng thành công');
    }
    public function update(Request $req, $rowId)
    {
        $qty = $req->qty?$req->qty:1;
        Cart::update($rowId, $qty);
        return redirect()->back()->with('success', 'Cập nhật thành công');
    }
    public function updateAjax(Request $req)
    {
        $qty= $req->qty?$req->qty:1;
        $rowId = $req->rowId;
        $cart = Cart::update($rowId, $qty);
        return response()->json($cart);
    }
    public function removeAjax(Request $req)
    {
        $rowId = $req->rowId;
        $cart = Cart::remove($rowId);
        return response()->json($cart);
    }
    public function destroy()
    {
        Cart::destroy();
        return redirect()->back()->with('success', 'Xóa giỏ hàng thành công');
    }
}


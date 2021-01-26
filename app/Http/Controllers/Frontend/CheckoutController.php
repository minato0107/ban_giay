<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product_detail;
use App\Http\Requests\AddOrderRequest;
use Illuminate\Support\Facades\Mail;



class CheckoutController extends Controller
{
    public function index()
    {
        if (Cart::content()->count()>0) {
            return view('frontend.pages.checkout');
        }else {
            return redirect()->route('shop')->with('');
        }
    }
    public function post_checkout(AddOrderRequest $req)
    {
        // dd(Cart::content());
        // dd($req->all());
        $cart = Cart::content();
        // dd($cart);
        // foreach ($cart as $value) {
        //     dd($value->options->color);
        // }
        $order = new Order;
        $order->id_user = Auth::user()->id;
        $order->total_price =(int) $req->total_price;
        $order->address_ship = $req->address_ship;
        $order->save();
        foreach ($cart as $value) {
            $order_detail = new Order_detail;
            $order_detail->id_order = $order->id;
            $order_detail->id_pro_detail = $value->id;
            $order_detail->size = (int) $value->options->size;
            $order_detail->color = $value->options->color;
            $order_detail->price = (int) $value->price;
            $order_detail->quantity = (int) $value->qty;
            $order_detail->save();
            $product_detail = Product_detail::find($value->id);
            $quantity = $product_detail->quantity;
            $product_detail->quantity = (int) $quantity - (int)$value->qty;
            $product_detail->save();
        }
        Cart::destroy();
        $data = $order_details = Order_detail::where('id_order', $order->id)->get();
        $tt =0;
        foreach ($data as $value) {
            $tt+=($value->quantity)*($value->price);
        }
        Mail::send('frontend.history',compact('data', 'tt'), function ($message) {
            $message->from('tieuabavuong91@gmail.com', 'Shop_juta');
            $message->to(Auth::user()->email, Auth::user()->name);
            $message->subject('Đơn hàng của bạn');
            });
        return redirect()->route('cart')->with('success', 'Đặt hàng thành công');
    }
}

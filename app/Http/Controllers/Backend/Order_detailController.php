<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;


class Order_detailController extends Controller
{
    public function index($id_order)
    {
        $order_details = Order_detail::where('id_order', $id_order)->get();
        // dd($order_details);
        $orders = Order::find($id_order);
        return view('backend.order_detail.index', compact('order_details', 'orders'));
    }
    public function status(Request $req,$id_order)
    {
        // dd($req->all());
        $order = Order::find($id_order);
        $order->status = $req->status;
        $order->save();
        return redirect()->route('order.index')->with('success', 'Cập nhật trạng thái đơn hàng thành công');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product_detail;


class StatisticalController extends Controller
{
    public function ton_kho()
    {
        $ton_kho = Product_detail::where('quantity', '>', 0)->get();
        return view('backend.statistical.ton-kho', compact('ton_kho'));
    }

    public function ban_chay()
    {
        $ban_chay = Order_detail::orderby('quantity', 'desc')->get();
        return view('backend.statistical.ban-chay', compact('ban_chay'));
    }

    public function doanh_thu()
    {
        $total = 0;
        $doanh_thu = Order::where('status', 3)->orderby('created_at', 'desc')->get();
        foreach ($doanh_thu as $value) {
            $total +=$value->total_price;
        }
        $total;
        return view('backend.statistical.doanh-thu', compact('doanh_thu', 'total'));
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Config;
use App\Models\Wishlist;
use Auth;
use Cart;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with([
                // danh mục cha
                'category_parent'=>Category::where([['parent_id', 0], ['type', 1]])->get(),
                // dùng để lấy ra danh mục con
                'cate_chi' => Category::all(),
                'cate_chil' => Category::where('type', 1)->where('parent_id','!=', 0)->get(),
                // Hiển thị tin tức
                'blog' => Blog::where('status',1)->orderBy('created_at','desc')->paginate(3),
                // Người dùng đăng nhập
                'user' => Auth::user(),
                //logo tiêu đề
                'logo_title'=>Config::where('slug', 'logo-title')->first(),
                // logo đầu trang
                'logo_header'=>Config::where('slug', 'logo-header')->first(),
                // logo cuối trang
                'logo_footer'=>Config::where('slug', 'logo-footer')->first(),
                // liên lạc
                'contact'=>Config::where('type', 2)->get(),
                'address'=>Config::where('type', 2)->where('slug', 'address')->first(),
                'email'=>Config::where('type', 2)->where('slug', 'email')->first(),
                'phone'=>Config::where('type', 2)->where('slug', 'phone')->first(),
                'worktime'=>Config::where('type', 2)->where('slug', 'work-time')->first(),
                'map'=>Config::where('type', 2)->where('slug', 'map')->first(),
                // lấy ra tin tức mới nhất
                'blog_new'=>Blog::where('status', 1)->orderBy('created_at', 'desc')->limit(3)->get(),
                'blog'=>Blog::where('status', 1)->orderBy('created_at', 'desc')->paginate(6),
                'blog_cate'=>Category::where('type', 0)->where('parent_id', 0)->get(),
                // Quảng cáo
                'ads1'=>Config::where('slug', 'ads1')->first(),
                'ads2'=>Config::where('slug', 'ads2')->first(),
                'ads3'=>Config::where('slug', 'ads3')->first(),
                'ads4'=>Config::where('slug', 'ads4')->first(),
                'ads5'=>Config::where('slug', 'ads5')->first(),
                'ads6'=>Config::where('slug', 'ads6')->first(),
                'ads7'=>Config::where('slug', 'ads7')->first(),
            ]);
            $subtotal=0;
            $totalqty=0;
            $ship=20000;
            // Cart::content();
            foreach (Cart::content() as $key => $value) {
                $subtotal+=$value->price*$value->qty;
                $totalqty+=$value->qty;
            }
            $view->with('subtotal', $subtotal);
            $view->with('totalqty', $totalqty);
            $view->with('ship', $ship);
        });
    }
}

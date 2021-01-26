<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Image_pro;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = Product::orderby('created_at','desc')->get();
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Category::all();
        return view('backend.product.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddProductRequest $request)
    {
        $image= trim($request->image.' ',url('/public/uploads/'));
        // dd($image);
        $product = Product::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'sku'=>$request->sku,
            'id_cate'=>$request->id_cate,
            'image'=>$image,
            'price'=>$request->price,
            'sale_price'=>$request->sale_price,
            'description'=>$request->description,
            'featured'=>$request->featured,
            'status'=>$request->status
        ]);
        $images = json_decode($request->images);
        if ($images != '') {
            foreach ($images as $key => $value) {
                $img = trim($value.' ', url('/public/uploads/'));
                Image_pro::create([
                    'id_product'=>$product->id,
                    'image' => $img
                ]);
            }
        }
        return redirect()->route('product_detail.index', $product->id)->with('success','Thêm mới thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Category::all();
        $product_id = Product::find($id);
        // dd($product);
        $img_pro = Image_pro::where('id_product', $id)->get();
        // dd($img_pro);
        return view('backend.product.edit', compact('cate', 'product_id', 'img_pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $req, $id)
    {
        $pro = Product::find($id);
       if ($req->image =='') {
            $image = $pro->image;
        }else {
            $image= trim($req->image.' ',url('/public/uploads/'));
        }
        $update = $pro->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'sku'=>$req->sku,
            'id_cate'=>$req->id_cate,
            'image'=>$image,
            'price'=>$req->price,
            'sale_price'=>$req->sale_price,
            'description'=>$req->description,
            'featured'=>$req->featured,
            'status'=>$req->status
        ]);
        if ($req->images!=''){
        $img_pro=Image_pro::where('id_product',$id)->delete();
        $images=json_decode($req->images);
        foreach ($images as $key => $value) {
            $img = trim($value.' ',url('/public/uploads/'));
            Image_pro::create([
                'id_product' => $pro->id,
                'image' =>$img
            ]);
        };
    }
        return redirect()->route('product.index')->with('sucess','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('Xóa thành công');
    }
}

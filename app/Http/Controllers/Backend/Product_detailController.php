<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Product_detail;
use App\Http\Requests\AddProduct_detailRequest;



class Product_detailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product_id = Product::find($id);
        $attr = Attribute::all();
        $list  = Product_detail::getList($id);

        return view('backend.product_detail.index', compact('product_id', 'attr','list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Responser
     */
    public function store(AddProduct_detailRequest $request, $id)
    {
        $model = new  Product_detail();
        $model->id_product =$id;
        $model->sku =$request->sku;
        $model->id_attr =json_encode(['size'=>$request->id_size,'color'=>$request->id_color]);
        $model->quantity = (int) $request->quantity;
        $model->status = $request->status==1?1:0;
        $model->save();
        $request->session()->flash('success','Thêm thành công');
        return redirect()->route('product_detail.index', $id);
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
    public function edit($id, $id_detail)
    {
        $list  = Product_detail::getList($id);
        $product_id = Product::find($id);
        $product_detail_id = Product_detail::find($id_detail);
        $attr = Attribute::all();
        $id_attr= json_decode($product_detail_id->id_attr);
        // dd($id_attr);
        return view('backend.product_detail.edit', compact('product_id','product_detail_id', 'attr', 'list','id_attr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $id_detail)
    {

        $id_attr =json_encode(['size'=>$request->id_size,'color'=>$request->id_color]);
        $product_detail_id = Product_detail::find($id_detail);
        $product_detail_id->update([
            'id_attr'=>$id_attr,
            'quantity'=>$request->quantity,
            'status'=>$request->status,
        ]);
        return redirect()->route('product_detail.index', $id)->with('success', 'Cập nhật chi tiết sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$id_detail)
    {
        $check = Product_detail::find($id_detail)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

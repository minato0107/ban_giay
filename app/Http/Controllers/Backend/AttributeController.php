<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attribute;


class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attr = Attribute::all();
        return view('backend.attr.index', compact('attr'));
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'value' => 'required|unique:attributes'
        ],[
            'value.required' =>'Giá trị không được bỏ trống',
            'value.unique' =>'Giá trị đã tồn tại',
        ]);
        Attribute::create($request->all());
        return redirect()->route('attr.index')->with('success', 'Thêm mới thành công');
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
        $attr = Attribute::all();
        $edit = Attribute::find($id);
        return view('backend.attr.edit', compact('attr', 'edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request ->validate([
        //    'value' => 'required|unique:attributes'
        // ],[
        //     'value.required' => 'Giá trị không được bỏ trống',
        //     'value.unique' => 'Giá trị đã tồn tại'
        // ]);
        Attribute::find($id)->update($request->all());
        return redirect()->route('attr.index')->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Attribute::find($id)->delete();
        return redirect()->route('attr.index')->with('success', 'Xóa thành công');
    }
}

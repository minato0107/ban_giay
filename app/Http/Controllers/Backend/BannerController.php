<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Http\Requests\AddBannerRequest;
use App\Http\Requests\UpdateBannerRequest;


class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::orderBy('created_at', 'desc')->get();
        return view('backend.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBannerRequest $req)
    {
        $banner = new Banner;
        if (!empty($req->image)) {
            $image = trim($req->image.' ', url('public/uploads'));
            $banner->image = $image;
        };
        $banner->name = $req->name;
        $banner->slug = $req->slug;
        $banner->title = $req->title;
        $banner->content = $req->content;
        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Thêm mới thành công');
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
        $edit= Banner::find($id);
        return view('backend.banner.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $req, $id)
    {
        $banner = Banner::find($id);
        if(!empty($req->image)){
            $banner->image = trim($req->image, url('public/uploads'));
            // dd($banner->image);
        }
        $banner->name = $req->name;
        $banner->slug = $req->slug;
        $banner->title = $req->title;
        $banner->content = $req->content;
        $banner->status = $req->status;
        $banner->save();
        return redirect()->route('banner.index')->with('success', 'Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Banner::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

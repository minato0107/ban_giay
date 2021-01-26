<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Config;
use App\Http\Requests\AddLogoRequest;



class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Config::where('type', 1)->orderBy('created_at', 'desc')->get();
        return view('backend.config.logo.index', compact('logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('backend.config.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddLogoRequest $req)
    {
        // // dd($req->value);
        // $logo = new Config;
        // $image = trim($req->value.' ', url('public/uploads'));
        // $logo->name = $req->name;
        // $logo->slug = $req->slug;
        // $logo->value = $image;
        // $logo->type = $req->type;
        // $logo->save();
        // return redirect()->route('logo.index')->with('success', 'Thêm mới thành công');
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
        $edit = Config::find($id);
        return view('backend.config.logo.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $edit_logo = Config::find($id);
        if (!empty($req->value)) {
            $image = trim($req->value.' ', url('public/uploads'));
            $edit_logo->value = $image;
        }
        $edit_logo->save();
        return redirect()->route('logo.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Config::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

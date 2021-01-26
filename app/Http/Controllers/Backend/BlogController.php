<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\UpdateBlogRequest;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddBlogRequest $req, Blog $blogs)
    {
        $image = trim($req->image.' ', url('public/uploads'));
        Blog::create([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'id_cate'=>$req->id_cate,
            'image'=>$image,
            'content'=>$req->content,
            'description'=>$req->description,
            'status'=>$req->status,
        ]);
        return redirect()->route('blog.index')->with('success', 'Thêm mới thành công');
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
        $blog_id = Blog::find($id);
        // dd($blog_id->name);
        return view('backend.blog.edit', compact('blog_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $req, $id)
    {
        $blog_id = Blog::find($id);
        $image = $req->image;
        if (empty($image)) {
            $image = $blog_id->image;
        }else {
            $image = trim($req->image.' ', url('public/uploads'));
        }
        $blog_id->update([
            'name'=>$req->name,
            'slug'=>$req->slug,
            'id_cate'=>$req->id_cate,
            'image'=>$image,
            'content'=>$req->content,
            'description'=>$req->description,
        ]);
        return redirect()->route('blog.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}

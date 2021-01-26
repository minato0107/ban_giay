<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CommentBlog;
use App\Models\PermissionCommentBlog;
use Auth;


class BlogController extends Controller
{
    public function index()
    {
        // dd($pro->cate);
        return view('frontend.pages.blog');
    }
    public function detail($slug)
    {
        $blog_detail = Blog::where('slug', $slug)->first();
        $id_blog= $blog_detail->id;
        $comment = CommentBlog::where('id_blog',$id_blog)->orderby('created_at', 'desc')->get();
        foreach ($comment as $value) {
            $permission_comment_blog = PermissionCommentBlog::where('id_comment_blog', $value->id)->orderby('created_at', 'desc')->get();
        }
        // dd($blog_detail->cate);
        return view('frontend.pages.blog_detail', compact('blog_detail','comment','permission_comment_blog'));
    }
    public function danh_muc($slug)
    {
        $cate_blogs = Category::where('slug', $slug)->first();
        $id = $cate_blogs->id;
        // dd($id);
        $blog_category = Blog::where('id_cate', $id)->paginate(3);
        // dd($blog_category);
        return view('frontend.pages.danh-muc-blog', compact('blog_category', 'cate_blogs'));
    }
}

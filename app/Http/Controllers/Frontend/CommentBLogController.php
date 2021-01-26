<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\CommentBlog;

class CommentBLogController extends Controller
{
    public function comment_blog(Request $req)
    {
        $id_user = Auth::user()->id;
        $id_blog = $req->id_blog;
        $content = $req->content;
        $comment = new CommentBlog;
        $comment->id_user = $id_user;
        $comment->id_blog = $id_blog;
        $comment->content = $content;
        $comment->save();
        return response()->json($comment);
    }
}

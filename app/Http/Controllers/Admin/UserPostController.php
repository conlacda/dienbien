<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\RaiseFundPost;

class UserPostController extends Controller
{
    public function index()
    {
        $posts = RaiseFundPost::where('type','member')->where('status','private')->paginate(5);
        return view('admin.userpost.index',compact('posts'));
    }

    public function destroy($id)
    {
        $post = RaiseFundPost::findOrFail($id);
        if ($post->type == 'admin') abort(404);
        $post->delete();
        return redirect()->back()->with([
            'message' => 'Xóa thành công',
        ]);
    }

    public function approve($id)
    {
        $post = RaiseFundPost::findOrFail($id);
        $post->status = "public";
        $post->save();
        return redirect()->back()->with([
           'messenger' => 'Bài viết đã được duyệt',
        ]);
    }
}

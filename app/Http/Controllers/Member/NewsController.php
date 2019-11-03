<?php


namespace App\Http\Controllers\Member;


use App\Http\Controllers\Controller;
use App\RaiseFundPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// Dùng để xử lý request của member
class NewsController extends Controller
{
    public function index()
    {
        $posts = RaiseFundPost::where('user_id',Auth::id())->paginate(15);
        return view('member.news.index', compact('posts'));
    }

    public function create()
    {
        return view('member.news.create');
    }

    public function store(Request $request)
    {
        $post = new RaiseFundPost();
        $post['title'] = $request['title'];
        $post['content'] = $request['content'];
        $post['status'] = 'private';
        $post['user_id'] = Auth::id();
        $post->type = Auth::user()->role;
        $post->save();
        return redirect()->route('member.news.index');
    }

    public function update(Request $request,$id)
    {
        $post = RaiseFundPost::findOrFail($id);
        $post->title = $request->title;
        $post->content = $request['content'];
        $post->save();
        return redirect()->route('member.news.index')->with([
           'message' => "Cập nhật thành công",
        ]);
    }

    public function edit($id)
    {
        $post = RaiseFundPost::findOrFail($id);
        if ($post->status == 'public') return redirect()->back()->with([
            'message' => 'Không thể chỉnh sửa bài viết đã được xét duyệt'
        ]);
        return view('member.news.edit',compact('post'));
    }

    public function destroy($id)
    {
        $post = RaiseFundPost::findOrFail($id);
        if ($post->user_id != Auth::id()){
            abort(404);
        }
        $post->delete();
        return redirect()->back();
    }
}

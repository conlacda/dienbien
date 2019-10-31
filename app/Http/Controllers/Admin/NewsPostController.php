<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\NewsPost;
use App\Repositories\ImageHelper;
use App\Sponsor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsPostController extends Controller
{
    public function index()
    {
        $posts = NewsPost::paginate(15);
        return view('admin.news.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $post = new NewsPost();
        $post->title = $request['title'];

        $post->content = $request['content'];
        $post->slug = Str::slug($post->title, '-') . uniqid();
        // Cover img
        if ($request->hasFile('cover_img')) {
            $post->cover_img = ImageHelper::store($request->file('cover_img'));
        }
        $post->save();
        return redirect()->route('admin.news.index')->with('message', 'Tạo bài viết thành công');
    }

    public function destroy($slug)
    {
        $post = NewsPost::where('slug', $slug)->first();
        $post->delete();
        return redirect()->route('admin.news.index');
    }

    public function edit($slug)
    {
        $news = NewsPost::where('slug', $slug)->first();
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, $slug)
    {
        $news = NewsPost::where('slug', $slug)->first();
        $news->title = $request['title'];
        $news->content = $request['content'];
        if (isset($request['cover_img'])) {
            if (file_exists(public_path($news->cover_img)) && $news->cover_img != NewsPost::DEFAULT_COVER_IMG)
            {
                unlink(public_path($news->cover_img));
            }
//            $file = $request['cover_img'];
//            $path = $file->store('public/news');
//            $news->cover_img = Storage::url($path);
            $news->cover_img = ImageHelper::store($request->file('cover_img'));
        }
        $news->save();
        return redirect()->back()->with('message', 'Cập nhật thành công');
    }
}

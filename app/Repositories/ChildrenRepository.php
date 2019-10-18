<?php


namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ChildrenRepository
{
    public $default_cover_img = '/images/news.png';
    public $model;

    public function store(Request $request)
    {
        $post = new $this->model;
        $post->content = $request['content'];
        if (isset($request['cover_img'])) {
            $file = $request['cover_img'];
            $path = $file->store('public/children');
            $post->cover_img = Storage::url($path);
        }

        $post->title = $request['title'];
        $post->slug = Str::slug($post->title, '-') . uniqid();
        $post->save();
        return true;
    }

    public function update(Request $request, $slug)
    {
        $post = $this->model::where('slug', $slug)->first();
        if ($post == NULL) abort(404);
        if (isset($request['cover_img'])) {
            if (file_exists(public_path($post->cover_img)) && $post->cover_img != $this->default_cover_img) {
                unlink(public_path($post->cover_img));
            }
            $file = $request['cover_img'];
            $path = $file->store('public/children');
            $post->cover_img = Storage::url($path);
        }
        $post->content = $request['content'];
        $post->title = $request['title'];
        $post->save();
        return true;
    }

    public function destroy($slug)
    {
        $post = $this->model::where('slug', $slug)->first();
        $post->delete();
        return true;
    }
}

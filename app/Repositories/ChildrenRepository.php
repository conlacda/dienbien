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
            // Storage link not working in heroku
//            $file = $request['cover_img'];
//            $path = $file->store('public/children');
//            $post->cover_img = Storage::url($path);
            // Save images to /public/uploads

            $post->cover_img = ImageHelper::store($request->file('cover_img'));
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
        if (isset($request['cover_img']) && $request->hasFile('cover_img')) {
//            $fileExtension = $request->file('cover_img')->getClientOriginalExtension();
//            $fileName = time() . "_" . rand(0, 9999999) . "_" . md5(rand(0, 9999999)) . "." . $fileExtension;
//            $uploadPath = public_path('/uploads');
//            $request->file('cover_img')->move($uploadPath, $fileName);
            $post->cover_img = ImageHelper::store($request->file('cover_img'));
            if (file_exists(public_path($post->cover_img)) && $post->cover_img != $this->default_cover_img) {
                unlink(public_path($post->cover_img));
            }

//            $file = $request['cover_img'];
//            $path = $file->store('public/children');
//            $post->cover_img = Storage::url($path);
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

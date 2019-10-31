<?php


namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use App\Image;
use App\Repositories\ImageHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(21);
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('album')) {
            $album = $request->file('album');
            $gallery = new Gallery();
            $gallery->slug = Str::slug($request->title, '-') . date("Y_m_d_H_i_s");
            $gallery->title = $request->title;
            $gallery->save();
            for ($i = 0; $i < count($album); $i++) {
                $image = new Image();
                $image->link = ImageHelper::store($album[$i]);
                $image->gallery_id = $gallery->id;
                $image->save();
            }
        } else {
            return redirect()->back()->withErrors(['message' => 'Hãy thêm ảnh trước rồi tải lại']);
        };
        return redirect()->route('admin.galleries.index');

    }

    public function update(Request $request, $slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        if ($request->hasFile('album')) {
            for ($i = 0; $i < count($request->file('album')); $i++) {
                $img = new Image();
                $img->gallery_id = $gallery->id;
                $img->link = ImageHelper::store($request->file('album')[$i]);
                $img->save();
            }
        }
        return redirect()->back()->with(['message' => 'Cập nhật thành công']);
    }

    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        if ($gallery == NULL){
            abort(404);
        }
        return view('admin.galleries.show', compact('gallery'));
    }

    public function destroy($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();
        $images = $gallery->images;
        foreach ($images as $image) {
            if (file_exists(public_path($image->link)) && $image->link != null) {
                unlink(public_path($image->link));
            }
        }
        Image::where('gallery_id',$gallery->id)->delete();
        $gallery->delete();
        return response()->json([
            'message' => 'success',
        ]);
    }

    public function deleteImage($id)
    {
        Image::where('id',$id)->delete();
        return response()->json([
            "messenger" => "success"
        ]);
    }
}

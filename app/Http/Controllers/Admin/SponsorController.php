<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Repositories\ImageHelper;
use App\Sponsor;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsor::paginate(10);
        return view('admin.sponsors.index',compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sponsors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Sponsor();
        $post->name = $request['name'];
        if ($request->hasFile('cover_img')) {
            $post->cover_img = ImageHelper::store($request->file('cover_img'));
        }
        $post->link = $request['link'];
        $post->introduction = $request['introduction'];
        $post->slug = Str::slug($post->title, '-') . uniqid();
        $post->save();
        return redirect()->route('admin.sponsors.index')->with('message', 'Tạo bài viết thành công');
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
    public function edit($slug)
    {
        $sponsor = Sponsor::where('slug', $slug)->first();
        return view('admin.sponsors.edit', compact('sponsor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $sponsor = Sponsor::where('slug',$slug)->first();
        $sponsor->name= $request['name'];
        $sponsor->link= $request['link'];
        $sponsor->introduction= $request['introduction'];
        $sponsor->name= $request['name'];

        if (isset($request['cover_img'])) {
            if (file_exists(public_path($sponsor->cover_img)) && $sponsor->cover_img != Sponsor::COVER_IMG_DEFAULT)
            {
                unlink(public_path($sponsor->cover_img));
            }
            $sponsor->cover_img = ImageHelper::store($request->file('cover_img'));
        }
        $sponsor->save();
        return redirect()->route('admin.sponsors.index')->with('message', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $sponsor = Sponsor::where('slug', $slug)->first();
        $sponsor->delete();
        return redirect()->route('admin.sponsors.index')->with('message', 'Xóa thành công');
    }
}

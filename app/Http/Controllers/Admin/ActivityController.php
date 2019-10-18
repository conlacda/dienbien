<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Http\Controllers\Controller;
use App\NewsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    public $default_cover_img = '/images/activity.jpg';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activity.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Activity();
        $post->content = $request['content'];
        if (isset($request['cover_img'])) {
            $file = $request['cover_img'];
            $path = $file->store('public/news');
            $post->cover_img = Storage::url($path);
        }
        $post->title = $request['title'];
        $post->slug = Str::slug($post->title, '-') . uniqid();
        $post->save();
        return redirect()->route('admin.activities.index');
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
        $activity = Activity::where('slug',$slug)->first();
        return view('admin.activity.edit',compact('activity'));
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
        $activity = Activity::where('slug',$slug)->first();
        if ($activity == NULL) abort(404);
        $activity->title = $request['title'];
        $activity->content = $request['content'];
        if (isset($request['cover_img'])) {
            if (file_exists(public_path($post->cover_img)) && $post->cover_img != $this->default_cover_img)
            {
                unlink(public_path($post->cover_img));
            }
            $file = $request['cover_img'];
            $path = $file->store('public/news');
            $post->cover_img = Storage::url($path);
        }
        $activity->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $activity = Activity::where('slug',$slug)->first();
        $activity->delete();
        return redirect()->back();
    }
}

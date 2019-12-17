<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Http\Controllers\Controller;
use App\NewsPost;
use App\Repositories\ImageHelper;
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
        $activities = Activity::paginate(5);
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
        $activity = new Activity();
        $activity['content'] = $request['content'];
        if ($request->hasFile('cover_img')){
            $activity->cover_img = ImageHelper::store($request->file('cover_img'));
        }
        $activity->title = $request['title'];
        $activity->slug = Str::slug($activity->title, '-') . uniqid();
        $activity->save();
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
     * @param \Illuminate\Http\Request $request
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $activity = Activity::where('slug',$slug)->first();
        if ($activity == NULL) abort(404);
        $activity->title = $request['title'];
        $activity->content = $request['content'];
       if ($request->hasFile('cover_img')){

           if (file_exists(public_path($activity->cover_img)) && $activity->cover_img != $this->default_cover_img){
               unlink(public_path($activity->cover_img));
           }
           $activity->cover_img = ImageHelper::store($request->file('cover_img'));
       }
        $activity->save();
        return redirect('/admin/activities');
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

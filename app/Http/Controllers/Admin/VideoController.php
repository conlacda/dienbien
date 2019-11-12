<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\ImageHelper;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::paginate(9);
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $video = new Video();
        if ($request->hasFile('video')) {
            $video->fill($request->all());
            $video->link = ImageHelper::store($request->file('video'));
            $video->save();
            return redirect()->route('admin.videos.index')->with([
                'message' => 'Tải lên video thành công',
            ]);
        } else if (isset($request->link)){
            $video->fill($request->all());
            $video->save();
            return redirect()->route('admin.videos.index')->with([
                'message' => 'Lưu thành công',
            ]);
        }
        return redirect()->route('admin.videos.index')->with([
            'message' => 'Có lỗi xảy ra! Thử lại sau .',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());
        $video->save();
        return redirect()->back()->with([
           'message' => "Đã cập nhật thông tin video",
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = Video::where('id',$id)->first();
        if ($video != NULL){
            if(file_exists(public_path($video->link)) && $video->link != null) {
                unlink(public_path($video->link));
            }
            $video->delete();
            return response()->json([
               'message' => "Đã xóa video",
            ]);
        } else
            return response()->json([
               'message' => 'Không tìm thấy video này !',
            ]);
    }
}

<?php


namespace App\Http\Controllers\Guest;


use App\Http\Controllers\Controller;
use App\RaiseFundPost;
use Illuminate\Http\Request;

class RaiseFundNewsController extends Controller
{
    public function index(Request $request)
    {
        if (!isset($request->type)){
            $request->type = 'admin';
        }
        // request->type sẽ lưu loại bài viết
        $posts = RaiseFundPost::where('type',$request->type)->where('status','public')->paginate(15);
        dd('Day la trang tin tuc');
    }
}

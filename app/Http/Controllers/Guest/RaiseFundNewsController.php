<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\RaiseFundPost;
use Illuminate\Http\Request;

class RaiseFundNewsController extends Controller
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        view()->share('contact', $this->contact);
    }
    public function index(Request $request)
    {
        if (!isset($request->type)) {
            $request->type = 'admin';
        }
        // request->type sẽ lưu loại bài viết
        $posts = RaiseFundPost::where('type', $request->type)->where('status', 'public')->paginate(15);
        return view('raise-fund-post.index', compact('posts'))->with([
            'title' => 'Bài đăng tin tức , gây quỹ chung',
            'link' => route('children.index2')
        ]);
    }
}

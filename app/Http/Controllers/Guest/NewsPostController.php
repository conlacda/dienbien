<?php

namespace App\Http\Controllers\Guest;

use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\NewsPost;
use Illuminate\Http\Request;

class NewsPostController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $posts = NewsPost::paginate(15);
        return view('news.index',compact('posts'));
    }

    public function slug($slug) // ko dùng mà dùng modal đọc luôn
    {
        $post = NewsPost::where('slug',$slug)->first();
        return $post;
    }
}

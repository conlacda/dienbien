<?php


namespace App\Http\Controllers\Member;


use App\Gallery;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(21);
        return view('member.images.index', compact('galleries'));
    }
}

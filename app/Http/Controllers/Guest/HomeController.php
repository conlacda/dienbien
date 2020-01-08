<?php

namespace App\Http\Controllers\Guest;

use App\Activity;
use App\Children2;
use App\Children3;
use App\ContactInformation;
use App\Document;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\NewsPost;
use App\Sponsor;
use App\Video;

// Controller ở trang chủ ngoài cùng

class HomeController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $children2New = Children2::latest()->first();
        $children3New = Children3::latest()->first();
        $contact = ContactInformation::latest()->first();
        $news = NewsPost::take(9)->orderBy('id','desc')->get();
        $galleries = Gallery::orderBy('id','DESC')->with('images')->take(4)->get();
        $galleries = $galleries->filter(function ($item) {
            return count($item->images) > 0;
        })->values();
        $videos = Video::take(4)->orderBy('id', 'DESC')->get();
        $documents  = Document::take(5)->get();
        $sponsors = Sponsor::all();
        $activities = Activity::take(5)->get();
        return view('index',compact('children2New','children3New','contact','news','galleries','videos','documents','sponsors','activities'));
    }
}

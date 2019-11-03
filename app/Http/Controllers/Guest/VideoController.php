<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        view()->share('contact',$this->contact);
    }
    public function index()
    {
        $videos = Video::paginate(9);
        return view('videos.index',compact('videos'));
    }
}

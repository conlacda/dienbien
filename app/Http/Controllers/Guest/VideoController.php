<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\Video;

class VideoController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $videos = Video::paginate(9);
        return view('videos.index',compact('videos'));
    }
}

<?php

namespace App\Http\Controllers\Guest;

use App\Activity;
use App\Children2;
use App\Children3;
use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\NewsPost;

class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $children2New = Children2::latest()->first();
        $children3New = Children3::latest()->first();
        $contact = ContactInformation::latest()->first();
        $news = NewsPost::take(9)->orderBy('id','desc')->get();
        return view('index',compact('children2New','children3New','contact','news'));
    }
}

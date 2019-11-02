<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Gallery;

class GalleryController
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        view()->share('contact',$this->contact);
    }

    public function index()
    {
        $galleries = Gallery::with('images')->paginate(9);
        return view('gallery.index',compact('galleries'));
    }

    public function show($slug)
    {
        $gallery = Gallery::where('slug',$slug)->first();
        return view('gallery.show',compact('gallery'));
    }
}

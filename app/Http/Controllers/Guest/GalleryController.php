<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;

class GalleryController
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        view()->share('contact',$this->contact);
    }

    public function index()
    {
        return view('gallery.index');
    }
}

<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\Introduction;

class IntroductionController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return redirect()->route('introduction.specific', ['slug' => Introduction::SLUG_MINI[0]]);
    }

    public function specific($slug)
    {
        $introduction = Introduction::where('slug', $slug)->first();
        return view('introduction.index', compact('introduction'));
    }
}

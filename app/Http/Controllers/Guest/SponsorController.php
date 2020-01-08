<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Http\Controllers\Controller;
use App\Sponsor;
use Illuminate\Database\Eloquent\Model;

class SponsorController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $sponsors = Sponsor::all();
        return view('sponsor.index', compact('sponsors'));

    }

    public function slug($slug)
    {
        $sponsor = Sponsor::where('slug', $slug)->first();
        return view('sponsor.slug', compact('sponsor'));
    }
}

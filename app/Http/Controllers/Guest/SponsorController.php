<?php


namespace App\Http\Controllers\Guest;


use App\ContactInformation;
use App\Sponsor;
use Illuminate\Database\Eloquent\Model;

class SponsorController extends Model
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        view()->share('contact', $this->contact);
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

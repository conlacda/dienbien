<?php


namespace App\Http\Controllers\Guest;


use App\Activity;
use App\ContactInformation;
use App\Http\Controllers\Controller;

class GeneralController extends Controller
{
    public function __construct()
    {
        $this->contact = ContactInformation::latest()->first();
        $this->activities = Activity::take(5)->get();
        view()->share('contact', $this->contact);
        view()->share('activities',$this->activities);
    }
}

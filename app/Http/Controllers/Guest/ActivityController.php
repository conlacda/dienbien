<?php


namespace App\Http\Controllers\Guest;


use App\Activity;
use App\ContactInformation;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class ActivityController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $activities = Activity::orderBy('id','DESC')->paginate('15');
        return view('activities.index',compact('activities'));
    }

    public function slug($slug)
    {
        $activity = Activity::where('slug',$slug)->first();
        if ($activity == NULL){ // phần này bỏ đi trên product
            abort(404);
        }
        $relatedActivities = Activity::where('id','<>',$activity->id)->orderBy('id','DESC')->take(4)->get();
        return view('activities.slug',compact('activity','relatedActivities'));
    }
}

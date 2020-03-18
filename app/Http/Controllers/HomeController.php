<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect('/');
    }

    public function test()
    {
        return view('test');
    }
    public function delete()
    {
        DB::table('users')->delete();
        DB::table('activities')->delete();
        DB::table('sponsors')->delete();
        DB::table('contact_informations')->delete();
        DB::table('introductions')->delete();
        DB::table('children1s')->delete();
        DB::table('children2s')->delete();
        DB::table('children3s')->delete();
        DB::table('children4s')->delete();
        DB::table('news_posts')->delete();
        DB::table('galleries')->delete();
        DB::table('images')->delete();
        DB::table('videos')->delete();
        DB::table('documents')->delete();
    }
}

<?php


namespace App\Http\Controllers\Member;


use App\Http\Controllers\Controller;

class MHomeController extends Controller
{
    public function index()
    {
        return redirect()->route('member.news.index');
    }
}

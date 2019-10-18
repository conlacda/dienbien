<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class AdminController extends Controller
{
    public function index()
    {
        return redirect()->route('admin.introductions.index');
    }
}

<?php


namespace App\Http\Controllers\Guest;


use App\Children1;
use App\Children2;
use App\Children3;
use App\Children4;
use App\ContactInformation;
use Illuminate\Database\Eloquent\Model;

class ChildrenController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return redirect()->route('children.index1');
    }

    public function index1()
    {
        $posts = Children1::orderBy('id', 'DESC')->paginate(15);
        return view('children.index', compact('posts'))
            ->with([
                'title' => 'Tổng quan về trẻ em Điện Biên',
                'link' => route('children.index1')
            ]);
    }

    public function slug1($slug)
    {
        $post = Children1::where('slug', $slug)->first();
        if ($post == NULL) {
            abort(404);
        }
        return view('children.slug', compact('post'));
    }

    public function index2()
    {
        $posts = Children2::orderBy('id', 'DESC')->paginate(15);
        return view('children.index', compact('posts'))
            ->with([
                'title' => 'Trẻ em cần được giúp đỡ',
                'link' => route('children.index2')
            ]);
    }

    public function slug2($slug)
    {
        $post = Children2::where('slug', $slug)->first();
        if ($post == NULL) {
            abort(404);
        }
        return view('children.slug', compact('post'));
    }

    public function index3()
    {
        $posts = Children3::orderBy('id', 'DESC')->paginate(15);
        return view('children.index', compact('posts'))
            ->with([
                'title' => 'Trẻ em đã được giúp đỡ',
                'link' => route('children.index3')
            ]);
    }

    public function slug3($slug)
    {
        $post = Children3::where('slug', $slug)->first();
        if ($post == NULL) {
            abort(404);
        }
        return view('children.slug', compact('post'));
    }

    public function index4()
    {
        $posts = Children4::orderBy('id', 'DESC')->paginate(15);
        return view('children.index', compact('posts'))
            ->with([
                'title' => 'Gương sáng trẻ em',
                'link' => route('children.index4')
            ]);
    }

    public function slug4($slug)
    {
        $post = Children4::where('slug', $slug)->first();
        if ($post == NULL) {
            abort(404);
        }
        return view('children.slug', compact('post'));
    }
}

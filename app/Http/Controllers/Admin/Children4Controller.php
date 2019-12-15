<?php


namespace App\Http\Controllers\Admin;

use App\Children4;
use App\Http\Controllers\Controller;
use App\Repositories\ChildrenRepository;
use Illuminate\Http\Request;

class Children4Controller extends Controller
{
    public function __construct(ChildrenRepository $repo)
    {
        $repo->model = Children4::class;
        $this->repo = $repo;
        view()->share('modelName' , 'children4s');
        view()->share('title','Gương sáng trẻ em');
    }

    public function index()
    {
        $posts = $this->repo->model::paginate(5);
        return view('admin.children.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create()
    {
        return view('admin.children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->repo->store($request);
        return redirect()->back()->with('message', 'Tạo bài viết thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = $this->repo->model::where('slug', $slug)->first();
        return view('admin.children.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        if ($this->repo->update($request, $slug)) {
            return redirect()->back()->with('message', 'Cập nhật thành công');
        }
        return redirect()->back()->with('message', 'Cập nhật không thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $this->repo->destroy($slug);
        return redirect()->back();
    }
}

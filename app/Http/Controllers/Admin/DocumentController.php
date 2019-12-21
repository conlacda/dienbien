<?php


namespace App\Http\Controllers\Admin;

use App\Document;
use App\Http\Controllers\Controller;
use App\Repositories\FileHelper;
use App\Repositories\ImageHelper;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::paginate(7);
        return view('admin.document.index',compact('documents'));
    }

    public function store(Request $request)
    {
        $document = new Document();
        $document['user_id'] = Auth::id();
        $document['link'] = FileHelper::store($request->file,'/uploads/documents/');
        $document['title'] = $request->title;
        $document['slug'] = Str::slug($request->title, '-') . uniqid();
        $document->save();
        return redirect()->route('admin.document.index')->with('message', 'Tạo bài viết thành công');

    }

    public function destroy($slug)
    {
        $document = Document::where('slug',$slug)->first();
        if ($document != NULL) $document->delete();
        return redirect()->back();
    }
}

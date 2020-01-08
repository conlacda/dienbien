<?php


namespace App\Http\Controllers\Guest;

use App\NewsPost;

class AjaxController extends GeneralController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function post($id)
    {
        $post = NewsPost::where('id', $id)->first();
        if ($post == null)
            return response()->json([
                'title' => '',
                'content' => '',
                'cover_img' => '',
                'created_at' => '',
                'message' => 'null'
            ]);
        else {
            return response()->json([
                'title' => $post->title,
                'content' => $post->content,
                'cover_img' => $post->cover_img,
                'created_at' => $post->created_at,
                'message' => 'ok'
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PublicPostController extends Controller
{
    /**
     * Display a list of all post from the blog
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::select('posts.name', 'posts.post_body', 'users.name as user', 'posts.created_at')
            ->leftJoin('users', function ($join) {
                $join->on('posts.user_id', '=', 'users.id');
            })
            ->orderBy('created_at', 'DESC')
            ->paginate(6);
        return view('posts', compact('posts'))->with('i', ($request->input('page', 1) - 1) * 6);
    }
}

<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->detail = $request->text;
        $post->save();
        return response()->json($request);
    }

    public function index() {
        return view('line');
    }
}

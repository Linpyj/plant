<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create() {
        echo('create');
    }

    public function store() {
        echo('store');
        return response()->json(['apple' => 'red', 'peach' => 'pink']);
    }

    public function index() {
        return view('line');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return view('rekomendasi', [
            "title" => "Post",
            "active" => 'post',
            "posts" => Post::all()
        ]);
    }
}

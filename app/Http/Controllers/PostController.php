<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected const PAGETITLE = 'Blog';
    public function index()
    {
        $posts = Post::all();

        return view('blog/index', [
            'posts' => $posts,
            'pageTitle' => self::PAGETITLE,
        ]);
    }
}

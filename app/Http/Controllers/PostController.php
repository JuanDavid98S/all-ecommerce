<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected const PAGETITLE = 'Blog';
    /**
     * Displays all of the created posts
     */
    public function index(Request $request)
    {
        $categories = Category::all();
        $categoryId = $request->query('category');

        $posts = Post::when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->latest()->paginate(6);

        $posts->appends(['category' => $categoryId]);

        return view('blog/index', [
            'posts' => $posts,
            'pageTitle' => self::PAGETITLE,
            'categories' => $categories
        ]);
    }

    /**
     * Displays the selected blog post
     * @param int $id Id of the post
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        $category = $post->category;
        $date = Carbon::parse($post->created_at)->format('M j, Y');

        return view('blog/show', [
            'post' => $post,
            'category' => $category,
            'date' => $date
        ]);
    }
}

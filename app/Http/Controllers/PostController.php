<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request) {
        // Get the search input
        $search = $request->input('search');

        // Query posts based on the search input
        $posts = Post::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
            ->orWhere('excerpt', 'like', '%' . $search . '%');
        })->latest()->get();

        // Return the view with posts data
        return view('posts', [
            "title" => "All Posts",
            "Posts" => $posts
        ]);
    }

    public function show(Post $post) {
        return view("post", [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $posts = [
        [
            'id' => 1,
            'title' => 'First Post',
            'content' => 'This is the first blog post content.'
        ],
        [
            'id' => 2,
            'title' => 'Second Post',
            'content' => 'This is the second blog post content.'
        ],
        [
            'id' => 3,
            'title' => 'Third Post',
            'content' => 'This is the third blog post content.'
        ],
    ];

    public function index()
    {
        return view('blog.index', ['posts' => $this->posts]);
    }

    public function show($id)
    {
        $post = collect($this->posts)->firstWhere('id', $id);

        if (!$post) {
            abort(404);
        }

        return view('blog.show', compact('post'));
    }
}
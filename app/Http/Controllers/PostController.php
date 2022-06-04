<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Author;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add_post($id)
    {
        $author = Author::find($id);
        $post = new Post;
        $post->title= 'new post';
        $post->body = 'new body';

        $author->post()->save($post);
    }

    public function show($id)
    {
        $post = Author::find($id)->post;

        dd($post);
    }
}

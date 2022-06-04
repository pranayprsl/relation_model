<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    public function add_author()
    {
        $author = new Author;
        $author->author_name = 'pranali';
        $author->save();
    }

    public function showauthor($id)
    {
        $author = Post::find($id)->author;
        dd($author);
    }
}

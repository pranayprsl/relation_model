<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id)
    {
      $author = Author::find($id);
    //   var_dump($author->author_name);
    // dd($author->post);
    foreach($author->post as $post)
     {
         echo $post->title ;
         echo "<br>";
         echo $post->body;
     }   
    }
}

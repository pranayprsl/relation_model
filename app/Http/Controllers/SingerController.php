<?php

namespace App\Http\Controllers;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
    public function add_singer()
    {
        $song = new Song;
        $song->song = 'yo yo hunny sing';
        $song->save();
    }

    public function show_singer($id)
    {
      $song = Song::find($id)->singers;
      dd($song);
        
    }
}

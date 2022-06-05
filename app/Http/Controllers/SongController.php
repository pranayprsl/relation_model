<?php

namespace App\Http\Controllers;
use App\Models\Song;
use App\Models\Singer;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function singer()
    {
        $singer = new Singer;
        $singer->name = 'hunny sing';
        $singer->save();

        $songsids = [2,4,5];
        $singer->songs()->attach($songsids);   
    }

    public function show_song($id)
    {
        $song = Singer::find($id)->songs;
        dd($song);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album_song;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Album_song $album_songs)
    {
      $albumSongs = Album_song::find(1)->song()->get();
      // $songs = Song::get(['id']);
      // dd($albumSongs);
      // $albums = Album_song::get('album_id');
      // $albums = Album::find($albums);
      // dd($albums);

        return view('home',[
          'albumSongs' => $albumSongs,
          // 'songs' => $songs,
          // 'albums' => $albums
        ]);
    }

}

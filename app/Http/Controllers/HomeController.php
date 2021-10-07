<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {

      $albumSongs = app()->make('App\Http\Controllers\Album_songsController');
      $album_songs = $albumSongs->albumSong();

      // groupBy('album_id')->get(['album_id']);
      // $albums = app()->make('App\Http\Controllers\Album_songsController');
      // $albums = $albums->album();
      // dd($album_songs);

      return view('home',[
        'album_songs' => $album_songs,
      ]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album_song;

class Album_songsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function albumSong()
    {
      // groupByで、'album_id'の重複を削除する
      $album_songs = Album_song::with('song','album')->groupBy('album_id')->get(['album_id']);

      return $album_songs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album_song $album_song, $id)
    {
      // アルバムのIDに紐づいている、リレーションの取得(アーティスト、ジャンル)
      $albumId = $album_song->getAlbumId($id);
      // アルバムのIDに紐づいている、ソングのカウント
      $albumSongCount = $album_song->getAlbumSong($id)->count();
      // アルバムのIDに紐づいている、ソングの取得
      $albumSongIds = $album_song->getAlbumSongList($id);
      // $albumSongList =

      // dd($albumSongId);

      return view('albums.show', [
      'albumSongIds' => $albumSongIds,
      'albumId' => $albumId,
      'albumSongCount' => $albumSongCount
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

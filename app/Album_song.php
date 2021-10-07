<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album_song extends Model
{
  //
  public $timestamps = false;

  public function getAlbumId(Int $album_id)
  {
    return $this->with('album')->where('id', $album_id)->first();
  }

  public function getAlbumSong(Int $album_id)
  {
    return $this->where('album_id', $album_id)->get();
  }

  public function getAlbumSongList(Int $album_id)
  {
    return $this->with('song')->where('album_id', $album_id)->get();
  }

  public function playlists(): BelongsToMany
  {
    return $this->BelongsToMany(Playlist::class);
  }

  public function song(): BelongsTo
  {
    return $this->belongsTo(Song::class);
  }

  public function album(): BelongsTo
  {
    return $this->belongsTo(Album::class);
  }

}

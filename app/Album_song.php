<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album_song extends Model
{
  //
  public $timestamps = false;

  public function playlists()
  {
    return $this->hasMany(Playlist::class);
  }

  public function album()
  {
    return $this->belongsTo(Album::class);
  }

  public function song()
  {
    return $this->belongsTo(Song::class);
  }
}

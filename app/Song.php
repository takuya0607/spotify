<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
  //
  public $timestamps = false;

  public function album_songs()
  {
    return $this->hasMany(Album_song::class);
  }
}

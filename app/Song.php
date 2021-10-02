<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
  //
  public $timestamps = false;

  public function albums(): BelongsToMany
  {
    return $this->belongsToMany('App\Album', 'album_songs');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Album_song extends Model
{
  //
  public $timestamps = false;

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

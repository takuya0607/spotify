<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
  //
  public $timestamps = false;

  public function songs(): BelongsToMany
  {
    return $this->belongsToMany('App\Song', 'album_songs');
  }

  public function artist(): BelongsTo
  {
    return $this->belongsTo(Artist::class);
  }

  public function genre(): BelongsTo
  {
    return $this->belongsTo(Genre::class);
  }
}

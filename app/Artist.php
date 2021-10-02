<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Artist extends Model
{
  //
  public $timestamps = false;

  public function songs(): BelongsToMany
  {
    return $this->belongsToMany('App\Song','album_songs');
  }

}

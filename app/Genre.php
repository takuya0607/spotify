<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
  //
  public $timestamps = false;

  public function albums(): HasMany
  {
    return $this->hasMany(Album::class);
  }
}

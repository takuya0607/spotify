<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  //
  public $timestamps = false;

  public function albums()
  {
    return $this->hasMany(Album::class);
  }
}

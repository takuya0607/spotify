<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
  //
  public $timestamps = false;

  public function artist()
  {
    return $this->belongsTo(Artist::class);
  }

  public function genre()
  {
    return $this->belongsTo(Genre::class);
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Playlist extends Model
{
  use SoftDeletes;
    //
  protected $fillable = [
    'name',
    'order'
  ];

  public function user()
  {
    return $this->hasOne(User::class);
  }

  public function album_song()
  {
    return $this->belongsTo(Album_song::class);
  }
}

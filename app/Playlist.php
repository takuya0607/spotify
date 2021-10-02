<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Playlist extends Model
{
  use SoftDeletes;
    //
  protected $fillable = [
    'name',
    'order'
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  public function album_song(): BelongsTo
  {
    return $this->belongsTo(Album_song::class);
  }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('playlists')->insert([
      'name' => 'お気に入り',
      'order' => '1',
      'user_id' => '1',
      'album_song_id' => '1',
    ]);
    }
}

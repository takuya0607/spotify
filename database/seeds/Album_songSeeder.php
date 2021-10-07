<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Album_songSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('album_songs')->insert([
      [
        'song_id' => '1',
        'album_id' => '1',
      ],
      [
        'song_id' => '2',
        'album_id' => '2',
      ],
      [
        'song_id' => '3',
        'album_id' => '3',
      ],
      [
        'song_id' => '4',
        'album_id' => '4',
      ],
      [
        'song_id' => '1',
        'album_id' => '5',
      ],
      [
        'song_id' => '2',
        'album_id' => '5',
      ],
      [
        'song_id' => '3',
        'album_id' => '5',
      ],
      [
        'song_id' => '4',
        'album_id' => '5',
      ]
    ]);
    }
}

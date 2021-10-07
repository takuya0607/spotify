<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('albums')->insert([
      [
        'title' => '負けないで',
        'artist_id' => '1',
        'genre_id' => '1',
        'artworkPath' => 'images/artwork/zard.jpg'
      ],
      [
        "title" => "D'ont you see!",
        'artist_id' => '1',
        'genre_id' => '1',
        'artworkPath' => 'images/artwork/zard2.jpg'
      ],
      [
        'title' => 'マイ フレンド',
        'artist_id' => '1',
        'genre_id' => '1',
        'artworkPath' => 'images/artwork/zard3.jpg'
      ],
      [
        'title' => '揺れる想い',
        'artist_id' => '1',
        'genre_id' => '1',
        'artworkPath' => 'images/artwork/zard4.jpg'
      ],
      [
        'title' => 'BestAlbum',
        'artist_id' => '1',
        'genre_id' => '1',
        'artworkPath' => 'images/artwork/mig.jpg'
      ]
    ]);
    }
}

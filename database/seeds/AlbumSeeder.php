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
      'title' => 'BestSingle',
      'artist_id' => '1',
      'genre_id' => '1',
      'artworkPath' => 'images/artwork/sakai.jpg'
    ]);
    }
}

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
      'song_id' => '1',
      'album_id' => '1',
    ]);
    }
}

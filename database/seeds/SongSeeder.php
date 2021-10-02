<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('songs')->insert([
      'title' => '負けないで',
      'duration' => '3:00',
      'path' => 'music/makenaide.mp3',
      'albumOrder' => '1',
      'plays' => '1'
    ]);
    }
}

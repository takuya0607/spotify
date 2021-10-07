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
      [
        'title' => '負けないで',
        'duration' => '4:40',
        'path' => 'music/makenaide.mp3',
        'albumOrder' => '1',
        'plays' => '1'
      ],
      [
        'title' => "D'ont you see!",
        'duration' => '5:15',
        'path' => 'music/dontyousee.mp3',
        'albumOrder' => '1',
        'plays' => '1'
      ],
      [
        'title' => 'マイ フレンド',
        'duration' => '3:59',
        'path' => 'music/myfriend.mp3',
        'albumOrder' => '1',
        'plays' => '1'
      ],
      [
        'title' => '揺れる想い',
        'duration' => '4:31',
        'path' => 'music/yureruomoi.mp3',
        'albumOrder' => '1',
        'plays' => '1'
      ]
    ]);
    }
}

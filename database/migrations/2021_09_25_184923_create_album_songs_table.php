<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('song_id')->comment('ソングID');
            $table->unsignedBigInteger('album_id')->comment('アルバムID');
            $table->timestamps();

            $table->foreign('song_id')
              ->references('id')
              ->on('songs');

            $table->foreign('album_id')
            ->references('id')
              ->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_songs');
    }
}

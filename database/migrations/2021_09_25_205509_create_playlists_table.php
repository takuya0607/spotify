<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('order');
          $table->unsignedBigInteger('user_id')->comment('ユーザID');
          $table->unsignedBigInteger('album_song_id')->comment('アルバムソングID');
          $table->softDeletes();
          $table->timestamps();

          $table->foreign('user_id')
          ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

          $table->foreign('album_song_id')
          ->references('id')
            ->on('album_songs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlists');
    }
}

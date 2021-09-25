<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',250);
            $table->unsignedBigInteger('artist_id')->comment('アーティストID');
            $table->unsignedBigInteger('genre_id')->comment('ジャンルID');
            $table->string('artworkPath',500);
            $table->timestamps();

            $table->foreign('artist_id')
              ->references('id')
              ->on('artists');

            $table->foreign('genre_id')
            ->references('id')
              ->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}

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
            $table->BigIncrements('albumId');
            $table->string('namaAlbum')->unique();
            $table->text('deskripsi');
            $table->date('tanggalDibuat');
            $table->UnsignedBigInteger('userId');
            $table->timestamps();
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade')->onUpdate('cascade');
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

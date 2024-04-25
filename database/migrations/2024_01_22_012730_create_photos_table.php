<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->BigIncrements('photoId');
            $table->string('judulPhoto');
            $table->text('deskripsiPhoto');
            $table->date('tanggalUnggah');
            $table->string('lokasiFile');
            $table->UnsignedBigInteger('albumId');
            $table->foreign('albumId')->references('albumId')->on('albums')->onDelete('cascade');
            $table->UnsignedBigInteger('userId');
            $table->foreign('userId')->references('userId')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}

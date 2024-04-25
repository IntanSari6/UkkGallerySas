<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotocommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photocomments', function (Blueprint $table) {
            $table->BigIncrements('commentId');
            $table->string('isiKomentar');
            $table->date('tanggalKomentar');
            $table->UnsignedBigInteger('photoId');
            $table->foreign('photoId')->references('photoId')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('photocomments');
    }
}

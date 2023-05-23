<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar', function (Blueprint $table) {
            $table->bigIncrements('id_komentar');
            $table->unsignedBigInteger('id_artikel');
            $table->string('nama');
            $table->text('isi_komentar');
            $table->string('email');

            $table->foreign('id_artikel')->references('id_artikel')->on('artikel')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar');
    }
};

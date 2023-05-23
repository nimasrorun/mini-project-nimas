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
        Schema::create('artikel', function (Blueprint $table) {
            $table->bigIncrements('id_artikel');
            $table->string('judul_artikel');
            $table->string('isi_artikel');
            $table->unsignedBigInteger('id_penulis');
            $table->date('tanggal');
            $table->string('gambar_artikel');
            $table->foreign('id_penulis')->references('id_penulis')->on('penulis')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel');
    }
};

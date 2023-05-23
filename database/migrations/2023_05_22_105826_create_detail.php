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
        Schema::create('detail', function (Blueprint $table) {
            $table->bigIncrements('id_detail');
            $table->unsignedBigInteger('id_artikel');
            $table->unsignedBigInteger('id_komentar');

            $table->foreign('id_artikel')->references('id_artikel')->on('artikel')->onDelete('cascade');
            $table->foreign('id_komentar')->references('id_komentar')->on('komentar')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail');
    }
};

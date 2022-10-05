<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbAksesoriskomputerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_aksesoriskomputer', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('harga');
            $table->string('spesifikasi');
            $table->string('image');
            $table->string('toko');
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
        Schema::dropIfExists('tb_aksesoriskomputer');
    }
}
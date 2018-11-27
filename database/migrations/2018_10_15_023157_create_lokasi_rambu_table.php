<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLokasiRambuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_rambu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kelurahan_id');
            $table->integer('rambu_id');
            $table->integer('apbn')->length(5)->nullable();
            $table->double('lat',12,9);
            $table->double('long',12,9);
            $table->text('alamat');
            $table->tinyInteger('status_pasang')->default('0');
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
        Schema::dropIfExists('lokasi_rambu');
    }
}

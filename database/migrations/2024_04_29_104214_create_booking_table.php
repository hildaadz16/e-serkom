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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('nomor_identitas');
            $table->string('tipe_kamar');
            $table->date('tgl_pesan');
            $table->string('durasi_menginap');
            $table->string('total_harga');
            $table->double('diskon')->default(0); // Tambahkan kolom untuk menyimpan nilai diskon, default nilainya adalah 0
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
        Schema::dropIfExists('booking');
    }
};

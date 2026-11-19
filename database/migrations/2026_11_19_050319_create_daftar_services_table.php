<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('daftar_services', function (Blueprint $table) {
            $table->string('id_servis')->primary();
            $table->string('no_plat');
            $table->string('id_pelanggan');
            $table->string('nama_pelanggan');
            $table->text('keluhan_kendaraan');
            $table->date('tanggal_servis');
            $table->timestamps();

            $table->foreign('no_plat')->references('no_plat')->on('kendaraans')->onDelete('cascade');
            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('daftar_services');
    }
};

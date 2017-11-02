<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTableProdukMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk_masuk', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('tanggal');
            $table->unsignedSmallInteger('stok');
            $table->string('produk_kode', 20);
            $table->unsignedInteger('produk_detail_id');
            // $table->unsignedInteger('pegawai_id');
            $table->unsignedInteger('supplier_id')->nullable();
            $table->timestamps();

            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produk_masuk');
    }
}

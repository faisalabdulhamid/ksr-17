<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProdukKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk_keluar', function (Blueprint $table) {
            $table->foreign('produk_kode')
              ->references('kode')
              ->on('produk')
              ->onUpdate('cascade');
            $table->foreign('produk_detail_id')
              ->references('id')
              ->on('produk_detail')
              ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produk_keluar', function (Blueprint $table) {
            $table->dropForeign('produk_keluar_produk_kode_foreign');
            $table->dropForeign('produk_keluar_produk_detail_id_foreign');
        });
    }
}

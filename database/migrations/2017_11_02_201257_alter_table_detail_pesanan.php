<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableDetailPesanan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pesanan', function (Blueprint $table) {
            $table->foreign('pesanan_id')
              ->references('id')
              ->on('pesanan')
              ->onUpdate('cascade');
              
            $table->foreign('produk_kode')
              ->references('kode')
              ->on('produk')
              ->onUpdate('cascade');
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pesanan', function (Blueprint $table) {
            $table->dropForeign('detail_pesanan_pesanan_id_foreign');
            $table->dropForeign('detail_pesanan_produk_kode_foreign');
        });
    }
}

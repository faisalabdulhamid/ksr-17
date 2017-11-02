<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableProdukMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produk_masuk', function (Blueprint $table) {
            $table->foreign('produk_kode')
              ->references('kode')
              ->on('produk')
              ->onUpdate('cascade');
            $table->foreign('produk_detail_id')
              ->references('id')
              ->on('produk_detail')
              ->onUpdate('cascade');
            $table->foreign('supplier_id')
              ->references('id')
              ->on('supplier')
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
        Schema::table('produk_masuk', function (Blueprint $table) {
            $table->dropForeign('produk_masuk_produk_kode_foreign');
            $table->dropForeign('produk_masuk_produk_detail_id_foreign');
            $table->dropForeign('produk_masuk_supplier_id_foreign');
        });
    }
}

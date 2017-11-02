<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class ProdukKeluar extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'produk_keluar';

    public function ProdukDetail()
    {
      return $this->belongsTo(ProdukDetail::class, 'produk_detail_id');
    }

    public function Produk()
    {
      return $this->belongsTo(Produk::class, 'produk_kode');
    }
}

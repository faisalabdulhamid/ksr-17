<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class ProdukDetail extends implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'produk_detail';

    public function ProduksMasuks()
    {
      return $this->hasMany(ProduksMasuk::class, 'produk_detail_id');
    }

    public function ProdukKeluars()
    {
      return $this->hasMany(ProdukKeluar::class, 'produk_detail_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class Produk extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'produk';
    protected $primaryKey = 'kode';
    protected $increments = false;

    public function kategori()
    {
      return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function satuan()
    {
      return $this->belongsTo(Satuan::class, 'satuan_id');
    }

    public function ProdukMasuk()
    {
      return $this->hasMany(ProdukMasuk::class, 'produk_kode');
    }

    public function ProdukKeluar()
    {
      return $this->hasMany(ProdukKeluar::class, 'produk_kode');
    }

    public function Pesanans()
    {
      return $this->belongsToMany(Pesanan::class, 'produk_kode');
    }
}

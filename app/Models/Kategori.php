<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class Kategori extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'kategori';

    public function produks()
    {
      return $this->hasMany(Produk::class, 'kategori_id');
    }
}

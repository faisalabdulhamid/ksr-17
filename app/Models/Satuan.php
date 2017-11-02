<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class Satuan extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = "satuan";

    public function Produks()
    {
      return $this->hasMany(Produk::class, 'satuan_id');
    }
}

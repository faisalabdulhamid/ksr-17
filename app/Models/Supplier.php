<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class Supplier extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'supplier';

    public function ProdukMasuks()
    {
      return $this->hasMany(ProdukMasuk::class, 'supplier_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class ProdukMasuk extends Model implements InterfaceModel
{
    use ModelHepler;
    
    protected $table = 'produk_masuk';
}

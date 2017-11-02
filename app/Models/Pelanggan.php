<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Utilities\InterfaceModel;
use App\Models\Utilities\ModelHepler;

class Pelanggan extends Model implements InterfaceModel
{
    use ModelHepler;

    protected $table = 'pelanggan';

    public function Pesanans()
    {
      return $this->hasMany(Pesanan::class, 'pelanggan_id');
    }
}

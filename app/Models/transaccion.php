<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaccion extends Model
{
    use HasFactory;
    protected $table = "transacciones";

    protected $fillable = ["id", "id_vendedor", "id_comprador", "id_nft", "precio", "fecha_compra"];

    public $timestamps = false;
}
